<?php

/** @noinspection PhpUndefinedClassInspection */

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\OTPVerificationController;
use App\Models\BusinessSetting;
use App\Models\Customer;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
use App\Notifications\AppEmailVerificationNotification;
use Hash;


class AuthController extends Controller 
{
    public function signup(Request $request)
    {
        if (User::where('email', $request->email_or_phone)->orWhere('phone', $request->email_or_phone)->first() != null) {
            return response()->json([
                'result' => false,
                'message' => translate('User again already exists.'),
                'user_id' => 0
            ], 400);
        }
 
      
            $user = new User([
                'name' => $request->name, 
                'email' => $request->email_or_phone,
                'phone' => $request->mobile,
                'password' => bcrypt($request->password),
                'email_verified_at' => date('Y-m-d H:m:s'),
                'verification_code' => rand(100000, 999999)
            ]);
      

   

        $user->save();

        $customer = new Customer;
        $customer->user_id = $user->id;
        $customer->save();
        if($user->id){
        return response()->json([
            'result' => true,
            'message' => translate('Registration Successful. Please verify and log in to your account.'),
            'user_id' => $user->id
        ], 201);}
        else{
                  return response()->json([
                'result' => false,
                'message' => translate('Cannot save user.'),
            ], 400);
             
        }
    }
 
    public function uploads(Request $request){
        $image = $request->file('image');
        if($request->hasFile('image')){
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/uploads/images'),$new_name);
            return response()->json($new_name);
        }
        else{
             return response()->json('imagenull');
        }

        }
    

    public function resendCode(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $user->verification_code = rand(100000, 999999);

        if ($request->verify_by == 'email') {
            $user->notify(new AppEmailVerificationNotification());
        } else {
            $otpController = new OTPVerificationController();
            $otpController->send_code($user);
        }

        $user->save();

        return response()->json([
            'result' => true,
            'message' => translate('Verification code is sent again'),
        ], 200);
    }

    public function confirmCode(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();

        if ($user->verification_code == $request->verification_code) {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->verification_code = null;
            $user->save();
            return response()->json([
                'result' => true,
                'message' => translate('Your account is now verified.Please login'),
            ], 200);
        } else {
            return response()->json([
                'result' => false,
                'message' => translate('Code does not match, you can request for resending the code'),
            ], 200);
        }
    }

    public function login(Request $request)
    {
        /*$request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);*/

        $delivery_boy_condition = $request->has('user_type') && $request->user_type == 'delivery_boy';

        if ($delivery_boy_condition) {
            $user = User::whereIn('user_type', ['delivery_boy'])->where('email', $request->email)->orWhere('phone', $request->email)->first();
        } else {
            $user = User::whereIn('user_type', ['customer', 'seller'])->where('email', $request->email)->orWhere('phone', $request->email)->first();
        }




        if ($user != null) {
            if (Hash::check($request->password, $user->password)) {



               
                $tokenResult = $user->createToken('Personal Access Token');

                              
        $user->update([
            'access_token' => $tokenResult->accessToken
        ]);
             
              
                
                return $this->loginSuccess($tokenResult, $user);
            } else {
                return response()->json(['result' => false, 'message' => translate('Unauthorized'), 'user' => null], 401);
            }
        } else {
            return response()->json(['result' => false, 'message' => translate('User not found'), 'user' => null], 401);
        }
    }

    public function user(Request $request)
    {
        $user = User::find($request->user_id);

        return response()->json($user);
    }

    public function logout(Request $request)
    {
        $user = User::find($request->user_id);
        $user->token()->revoke();
            $user->update([
            'access_token' => null
        ]);
        return response()->json([
            'result' => true,
            'message' => translate('Successfully logged out')
        ]);
    }

    public function socialLogin(Request $request)
    {
        if (User::where('email', $request->email)->first() != null) {
            $user = User::where('email', $request->email)->first();
        } else {
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'provider_id' => $request->provider,
                'email_verified_at' => Carbon::now()
            ]);
            $user->save();
            $customer = new Customer;
            $customer->user_id = $user->id;
            $customer->save();
        }
        $tokenResult = $user->createToken('Personal Access Token');
        return $this->loginSuccess($tokenResult, $user);
    }

    protected function loginSuccess($tokenResult, $user)
    {
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addWeeks(100);
        $token->save();
        return response()->json([
            'result' => true,
            'message' => translate('Successfully logged in'),
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'user' => [
                'id' => $user->id,
                'type' => $user->user_type,
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'avatar_original' => api_asset($user->avatar_original),
                'phone' => $user->phone,
                'test' => $user->access_token,
            ]
        ]);
    }
}

