<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerPackage;
use App\Models\SellerPackage;
use App\Models\CombinedOrder;
use App\Models\BusinessSetting;
use App\Models\Seller;
use Session;

class BkashController extends Controller
{
    private $base_url;
    public function __construct()
    {
        if(get_setting('bkash_sandbox', 1)){
            $this->base_url = "https://checkout.sandbox.bka.sh/v1.2.0-beta/";
        }
        else {
            $this->base_url = "https://checkout.pay.bka.sh/v1.2.0-beta/";
        }
    }

    public function pay(){
        $amount = 0;
        if(Session::has('payment_type')){
            if(Session::get('payment_type') == 'cart_payment'){
                $combined_order = CombinedOrder::findOrFail(Session::get('combined_order_id'));
                $amount = round($combined_order->grand_total);
            }
            elseif (Session::get('payment_type') == 'wallet_payment') {
                $amount = round(Session::get('payment_data')['amount']);
            }
            elseif (Session::get('payment_type') == 'customer_package_payment') {
                $customer_package = CustomerPackage::findOrFail(Session::get('payment_data')['customer_package_id']);
                $amount = round($customer_package->amount);
            }
            elseif (Session::get('payment_type') == 'seller_package_payment') {
                $seller_package = SellerPackage::findOrFail(Session::get('payment_data')['seller_package_id']);
                $amount = round($seller_package->amount);
            }
        }

        $request_data = array('app_key'=> env('BKASH_CHECKOUT_APP_KEY'), 'app_secret'=>env('BKASH_CHECKOUT_APP_SECRET'));

        $url = curl_init($this->base_url.'checkout/token/grant');
        $request_data_json=json_encode($request_data);

        $header = array(
                'Content-Type:application/json',
                'username:'.env('BKASH_CHECKOUT_USER_NAME'),
                'password:'.env('BKASH_CHECKOUT_PASSWORD')
                );
        curl_setopt($url,CURLOPT_HTTPHEADER, $header);
        curl_setopt($url,CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url,CURLOPT_POSTFIELDS, $request_data_json);
        curl_setopt($url,CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

        $resultdata = curl_exec($url);
        curl_close($url);

        $token = json_decode($resultdata)->id_token;

        Session::put('bkash_token', $token);
        Session::put('payment_amount', $amount);

        return view('frontend.bkash.index');
    }

    public function checkout(Request $request){
        $auth = Session::get('bkash_token');

        $requestbody = array(
            'amount' => Session::get('payment_amount'),
            'currency' => 'BDT',
            'intent' => 'sale'
        );
        $url = curl_init($this->base_url.'checkout/payment/create');
        $requestbodyJson = json_encode($requestbody);

        $header = array(
            'Content-Type:application/json',
            'Authorization:' . $auth,
            'X-APP-Key:'.env('BKASH_CHECKOUT_APP_KEY')
        );

        curl_setopt($url, CURLOPT_HTTPHEADER, $header);
        curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url, CURLOPT_POSTFIELDS, $requestbodyJson);
        curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $resultdata = curl_exec($url);
        curl_close($url);

        return $resultdata;
    }

    public function excecute(Request $request){
        $paymentID = $request->paymentID;
        $auth = Session::get('bkash_token');

        $url = curl_init($this->base_url.'checkout/payment/execute/'.$paymentID);
        $header = array(
            'Content-Type:application/json',
            'Authorization:' . $auth,
            'X-APP-Key:'.env('BKASH_CHECKOUT_APP_KEY')
        );

        curl_setopt($url,CURLOPT_HTTPHEADER, $header);
        curl_setopt($url,CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($url,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url,CURLOPT_FOLLOWLOCATION, 1);
        $resultdata = curl_exec($url);
        curl_close($url);

        return $resultdata;
    }

    public function success(Request $request){
        $payment_type = Session::get('payment_type');

        if ($payment_type == 'cart_payment') {
            $checkoutController = new CheckoutController;
            return $checkoutController->checkout_done(Session::get('combined_order_id'), $request->payment_details);
        }

        if ($payment_type == 'wallet_payment') {
            $walletController = new WalletController;
            return $walletController->wallet_payment_done(Session::get('payment_data'), $request->payment_details);
        }

        if ($payment_type == 'customer_package_payment') {
            $customer_package_controller = new CustomerPackageController;
            return $customer_package_controller->purchase_payment_done(Session::get('payment_data'), $request->payment_details);
        }
        if($payment_type == 'seller_package_payment') {
            $seller_package_controller = new SellerPackageController;
            return $seller_package_controller->purchase_payment_done(Session::get('payment_data'), $request->payment_details);
        }
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\CombinedOrder;
use Session;
use App\Models\CustomerPackage;
use App\Models\SellerPackage;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

class PaypalController extends Controller
{

  public function getCheckout(Request $request)
{
    // Creating an environment
    $clientId = "AS9df5ruKAWI5VFFDE1qwafF10mLM0CPtiPxwKqeXFkrV2Cq76xvrwgajHlhBgJTXrTx-Uq1wFN9BeBW";
    $clientSecret = "EAtF7icdvuStK6OQ6TPEF1X-HdYqBb5m8J7gT-EPRZPUk8H4myhg8u3yXTEc0COWjc3UMTWEniFCzB2n";

    if (get_setting('paypal_sandbox') == 1) {
        $environment = new SandboxEnvironment($clientId, $clientSecret);
    } else {
        $environment = new ProductionEnvironment($clientId, $clientSecret);
    }
    $client = new PayPalHttpClient($environment);

    if (Session::has('payment_type')) {
        if (Session::get('payment_type') == 'cart_payment') {
            $combined_order = CombinedOrder::findOrFail(Session::get('combined_order_id'));
            $amount = $combined_order->grand_total;
        } elseif (Session::get('payment_type') == 'wallet_payment') {
            $amount = Session::get('payment_data')['amount'];
        } elseif (Session::get('payment_type') == 'customer_package_payment') {
            $customer_package = CustomerPackage::findOrFail(Session::get('payment_data')['customer_package_id']);
            $amount = $customer_package->amount;
        } elseif (Session::get('payment_type') == 'seller_package_payment') {
            $seller_package = SellerPackage::findOrFail(Session::get('payment_data')['seller_package_id']);
            $amount = $seller_package->amount;
        }
    }

    $amount = $request->amount;

    $request = new OrdersCreateRequest();
    $request->prefer('return=representation');
    $request->body = [
        "intent" => "CAPTURE",
        "purchase_units" => [
            [
                "amount" => [
                    "currency_code" => "USD",
                    "value" => $amount
                ]
            ]],
            "application_context" => [
                                  "cancel_url" => url('paypal/payment/cancel'),
                                  "return_url" => url('paypal/payment/done')
                             ]
    ];

        try {
            // Call API with your client and get a response for your call
            $response = $client->execute($request);
            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            return Redirect::to($response->result->links[1]->href);
        }catch (HttpException $ex) {

        }
    }


    public function getCancel(Request $request)
    {
        // Curse and humiliate the user for cancelling this most sacred payment (yours)
        $request->session()->forget('order_id');
        $request->session()->forget('payment_data');
        flash(translate('Payment cancelled'))->success();
        return redirect()->route('home');
    }

    public function getDone(Request $request)
    {
        //dd($request->all());
        // Creating an environment
        $clientId = env('PAYPAL_CLIENT_ID');
        $clientSecret = env('PAYPAL_CLIENT_SECRET');

        if (get_setting('paypal_sandbox') == 1) {
            $environment = new SandboxEnvironment($clientId, $clientSecret);
        }
        else {
            $environment = new ProductionEnvironment($clientId, $clientSecret);
        }
        $client = new PayPalHttpClient($environment);

        // $response->result->id gives the orderId of the order created above

        $ordersCaptureRequest = new OrdersCaptureRequest($request->token);
        $ordersCaptureRequest->prefer('return=representation');
        try {
            // Call API with your client and get a response for your call
            $response = $client->execute($ordersCaptureRequest);

            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            if($request->session()->has('payment_type')){
                if($request->session()->get('payment_type') == 'cart_payment'){
                    $checkoutController = new CheckoutController;
                    return $checkoutController->checkout_done($request->session()->get('combined_order_id'), json_encode($response));
                }
                elseif ($request->session()->get('payment_type') == 'wallet_payment') {
                    $walletController = new WalletController;
                    return $walletController->wallet_payment_done($request->session()->get('payment_data'), json_encode($response));
                }
                elseif ($request->session()->get('payment_type') == 'customer_package_payment') {$customer_package_controller = new CustomerPackageController;
                    return $customer_package_controller->purchase_payment_done($request->session()->get('payment_data'), json_encode($response));
                }
                elseif ($request->session()->get('payment_type') == 'seller_package_payment') {$seller_package_controller = new SellerPackageController;
                    return $seller_package_controller->purchase_payment_done($request->session()->get('payment_data'), json_encode($response));
                }
            }
        }catch (HttpException $ex) {

        }
    }
}
