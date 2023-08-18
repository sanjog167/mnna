<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\CombinedOrder; 
use App\Models\Form; 
use Session;
use App\Models\CustomerPackage;
use App\Models\SellerPackage;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;                     
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use Omnipay\Omnipay;
use App\Mail\FormManager;
use App\Models\DynamicMail;
use App\Mail\NotificationManager;
use Mail;
use Illuminate\Support\Str;
use App\Models\Upload;
use Combinations;
use Storage;
use Illuminate\Support\Facades\File;
use Cache;

class Paypalv2Controller extends Controller
{ 
    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID')); 
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->destinationPath = 'applyimages';
        $this->gateway->setTestMode(false);
    }

    public function pay(Request $request)
    {
        try { 

        	   $fname = $request->fname;
               $imageone = $request->file('imageone');
               $imagetwo = $request->file('imagetwo');
               $nameone = $request->nameone;
               
        
        if ($imageone) {
            $imageone =  $imageone->storeAs($this->destinationPath, time().'.'. $imageone->getClientOriginalExtension());
              
        }
        
        else{
              $imageone =  '';
            
        }
        
               if ($imagetwo) {
            $imagetwo =  $imagetwo->storeAs($this->destinationPath,'asd'.time().'.'. $imagetwo->getClientOriginalExtension());

        }
        
        else{
              $imagetwo =  '';
            
        }

        $state = $request->state;
        $mnumber = $request->mnumber;
        $nametwo = $request->nametwo;
        $applicantage = $request->applicantage;
        $cityname = $request->cityname;
        $education = $request->education;
        $describe = $request->describe;
        $gender = $request->gender;
        $height = $request->height;
        $country = $request->country;
        $bestway = $request->bestway;

        $params = [
            'fname' => $fname,
            'imageone' => $imageone,
            'imagetwo' => $imagetwo,
            'nameone' => $nameone,
            'state' => $state,
            'mnumber' => $mnumber,
            'nametwo' => $nametwo,
            'applicantage' => $applicantage,
            'cityname' => $cityname,
            'education' => $education,
            'describe' => $describe,
            'gender' => $gender,
            'height' => $height,
            'country' => $country,
            'bestway' => $bestway,

        ];


        $url = '?' . http_build_query($params);


            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
              'currency' => 'USD',
              'returnUrl' => url('paymentsuccess/'.$url),
                'cancelUrl' => url('error')
            ))->send(); 
 
            if ($response->isRedirect()) {
                $response->redirect();
            }
            else{
                return $response->getMessage();
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function paymentsuccess(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {
 
                $arr = $response->getData();

                $payment = new Form();
                  $payment->name = $request->nameone;
            $payment->surname = $request->nametwo;
            $payment->email =  $request->fname;
            $payment->mobile =  $request->mnumber;
            $payment->doi =  $request->state;
          $payment->poi = $request->imageone;
          $payment->prof =$request->applicantage;
          $payment->city =$request->cityname;
          $payment->mainname =$request->education;
          $payment->compname =$request->describe;
          $payment->alternate = $request->imagetwo;
          $payment->designation = $request->gender;
           $payment->addinv = $request->height;
          $payment->country = $request->country;
          $payment->mainname = $request->bestway;
                $payment->save();

                
                   $array['from'] = env('MAIL_FROM_ADDRESS');
                $array['subject'] = translate('Application Form for Miss Nepal North America 2023');
                $array['fname'] = $request->fname;
                $array['nameone'] = $request->nameone;
                $array['state'] = $request->state;
                $array['mnumber'] = $request->mnumber;
                $array['imageone'] = $request->imageone;
                $array['nametwo'] = $request->nametwo;
                $array['applicantage'] = $request->applicantage; 
                $array['cityname'] = $request->cityname;
                $array['education'] = $request->education; 
                $array['describe'] = $request->describe;
                $array['imagetwo'] = $request->imagetwo;
                $array['gender'] = $request->gender;
                $array['height'] = $request->height;
                $array['country'] = $request->country;
                $array['bestway'] = $request->bestway;
 

                
                Mail::to($request->fname)->queue(new FormManager($array));
                
                $emails = DynamicMail::all();
                
                foreach ($emails as $email) {
    Mail::to($email->email)->queue(new NotificationManager($array));
}
      
      

                Mail::to('sanjogpiya6@gmail.com')->queue(new NotificationManager($array));
                
                
                return "Payment is Successfull. Your Transaction Id is : " . $arr['id'];

            }
            else{
                return $response->getMessage();
            }
        }
        else{
            return 'Payment declined!!';
        }
    }

    public function error()
    {
        return 'User declined the payment!';   
    }

}