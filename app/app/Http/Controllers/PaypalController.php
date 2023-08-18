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
use App\Mail\NotificationManager;
use Mail;
use Illuminate\Support\Str;
use App\Models\Upload;
use Combinations;
use Storage;
use Illuminate\Support\Facades\File;
use Cache;

class PaypalController extends Controller
{
   private $gateway;
 
    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID')); 
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET')); 
        $this->gateway->setTestMode(true); //set it to 'false' when go live
        $this->destinationPath = 'applyimages';
    }

 public function pay(Request $request)
{
    try {
        $fname = $request->fname;
        $nameone = $request->nameone;
        $state = $request->state;
        $mnumber = $request->mnumber;
        $imageone = $request->file('imageone');
        
        if ($imageone) {
            $logoName =  $imageone->storeAs($this->destinationPath, time().'.'. $imageone->getClientOriginalExtension());
              
        }
        
        else{
              $logoName =  '';
            
        }
     
        
        $nametwo = $request->nametwo;
        $applicantage = $request->applicantage;
        $cityname = $request->cityname;
        $education = $request->education;
        $describe = $request->describe;
        

        
           
        $imagetwo = $request->file('imagetwo');
        
        if ($imagetwo) {
            $logoNametwo =  $imagetwo->storeAs($this->destinationPath, time().'.'. $imagetwo->getClientOriginalExtension());
              
        }
        
        else{
              $logoNametwo =  '';
            
        }
        
        $gender = $request->gender;
        $height = $request->height;
        
        $country = $request->country;
        
        
        
        

$url = "?fname=$fname&nameone=$nameone&state=$state&mnumber=$mnumber&image=$logoName&nametwo=$nametwo&height=$height&applicantage=$applicantage&cityname=$cityname&education=$education&country=$country&describe=$describe&imageto=$logoNametwo&gender=$gender";
        $response = $this->gateway->purchase(array(
            'amount' => $request->amount,
            'fname' => $fname,
            '$state' => $state,
            '$mnumber' => $mnumber,
            'nameone' => $nameone,
            'nametwo' => $nametwo,
            'applicantage' => $applicantage,
            '$cityname' => $cityname,
            '$education' => $education,
            '$describe' => $describe,
            'gender' => $gender,
            '$height' => $height,
            '$country' => $country,
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

public function success(Request $request)
{
    if ($request->input('paymentId') && $request->input('payerID')) {
        $transaction = $this->gateway->completePurchase(array(
            'payer_id' => $request->input('payerID'),
            'amount' => $request->amount,
            'transactionReference' => $request->input('paymentId')
        ));

        $response = $transaction->send();

        if ($response->isSuccessful()) {
            $arr = $response->getData();

            $payment = new Form();
               $payment->radioone = $arr['id'];
            $payment->whynominate = $arr['payer']['payer_info']['payer_id'];
            $payment->name = $request->nameone;
            $payment->surname = $request->nametwo;
            $payment->birth = env('PAYPAL_CURRENCY');
            $payment->email =  $request->fname;
            $payment->mobile =  $request->mnumber;
            $payment->doi =  $request->state;
          $payment->poi = $request->image;
          
          $payment->prof =$request->applicantage;
          $payment->city =$request->cityname;
          $payment->mainname =$request->education;
          $payment->compname =$request->describe;
          $payment->alternate = $request->imageto;
          $payment->designation = $request->gender;
           $payment->addinv = $request->height;
          $payment->country = $request->country;


            $payment->save();
            
                $array['from'] = env('MAIL_FROM_ADDRESS');
                $array['subject'] = translate('Application Form for Miss Nepal North America 2023');
                $array['fname'] = $request->fname;
                $array['nameone'] = $request->nameone;
                $array['state'] = $request->state;
                $array['mnumber'] = $request->mnumber;
                $array['image'] = $request->image;
                
                $array['nametwo'] = $request->nametwo;
                $array['applicantage'] = $request->applicantage;
                $array['cityname'] = $request->cityname;
                $array['education'] = $request->education;
                $array['describe'] = $request->describe;
                $array['imageto'] = $request->imageto;
                $array['gender'] = $request->gender;
                $array['height'] = $request->height;
                $array['country'] = $request->country;


                
                Mail::to($request->fname)->queue(new FormManager($array));
      
                  Mail::to('dreamsuniversal07@gmail.com')->queue(new NotificationManager($array));
                Mail::to('info@missnepalnorthamerica.com')->queue(new NotificationManager($array));
                Mail::to('sanzeev@gmail.com')->queue(new NotificationManager($array));

                Mail::to('rajghale36@gmail.com')->queue(new NotificationManager($array));


  return redirect()->route('confirmation');

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