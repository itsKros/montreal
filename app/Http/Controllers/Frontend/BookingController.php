<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Booking;
use App\Admin;
use Illuminate\Http\Request;
use Mail;

/** Paypal Details classes **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Exception\PayPalConnectionException;


class BookingController extends Controller
{
    private $api_context;

    /** 
    ** We declare the Api context as above and initialize it in the contructor
    **/
    public function __construct()
    {
        $this->api_context = new ApiContext(
            new OAuthTokenCredential(config('paypal.client_id'), config('paypal.secret'))
        );
        $this->api_context->setConfig(config('paypal.settings'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Booking";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Booking create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required|email',
            'phone'    => 'required',
            'package'  => 'required',
            'date'     => 'required',
            'time'     => 'required',
            'address'  => 'required',
            'username' => '',
            'userid'   => ''

        ]);

        $booking = new Booking;

        $booking->model_name = $request->modelname;
        $booking->user_id = $request->modelid;
        $booking->client_name = $request->name;
        $booking->client_email = $request->email;
        $booking->client_phone = $request->phone;
        $booking->package = $request->package;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->address = $request->address;
        $booking->save();

        //To admin
        Mail::send([], [], function ($message) use ($request) {
            $admin = Admin::find(1);
            $message->from('booking@montrealgents.com', 'Montreal Gentleman');
            $message->to($admin->email)
            ->subject('New Appointment For '.$request->modelname)
            ->setBody('<h3 style="font-weight:normal;">Hi, here is new appointment booked for:  <strong>'.$request->modelname.'</strong></h3>
            <p><em>Please check. </em></p><p><a href="'.route('admin.login').'">'.route('admin.login').'</a></p>','text/html');
        });

        //To Model
        Mail::send([], [], function ($message) use ($request) {
            $message->from('booking@montrealgents.com', 'Montreal Gentleman');
            $message->to($request->modelemail)
            ->subject('New Appointment For You '.$request->modelname)
            ->setBody('<h3 style="font-weight:normal;">Hi, here is new appointment booked for you <strong>'.$request->modelname.'</strong></h3>
            <p><em>Please login and check your my booking section. </em></p><p><a href="'.route('login').'">'.route('login').'</a></p>','text/html');
        });


        //To Client
        Mail::send([], [], function ($message) use ($request) {
            $message->from('booking@montrealgents.com', 'Montreal Gentleman');
            $message->to($request->email)
            ->subject('Hi! '.$request->name.' this is '.$request->modelname)
            ->setBody('<h3 style="font-weight:normal;">Hello there, thanks for choosing me , you can call me <b>'.$request->modelname.'</b> and I’m sure I’ll please you on the event day. <br>Looking forward to see you.<br><br>Love '.$request->modelname.'</h3>
            <br><p><em>Will contact you soon.</em></p>','text/html');
        });

        // Amount received as request is validated here.
        $pay_amount = $request->package;

        // We create the payer and set payment method, could be any of "credit_card", "bank", "paypal", "pay_upon_invoice", "carrier", "alternate_payment". 
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        // Create and setup items being paid for.. Could multiple items like: 'item1, item2 etc'.
        $item = new Item();
        $item->setName('Paypal Payment')->setCurrency('CAD')->setQuantity(1)->setPrice($pay_amount);

        // Create item list and set array of items for the item list.
        $itemList = new ItemList();
        $itemList->setItems(array($item));

        // Create and setup the total amount.
        $amount = new Amount();
        $amount->setCurrency('CAD')->setTotal($pay_amount);

        // Create a transaction and amount and description.
        $transaction = new Transaction();
        $transaction->setAmount($amount)->setItemList($itemList)
        ->setDescription('Montreal Booking');
        //You can set custom data with '->setCustom($data)' or put it in a session.

        // Create a redirect urls, cancel url brings us back to current page, return url takes us to confirm payment.
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('confirm-payment'))
        ->setCancelUrl(url()->current());

        // We set up the payment with the payer, urls and transactions.
        // Note: you can have different itemLists, then different transactions for it.
        $payment = new Payment();
        $payment->setIntent('Sale')->setPayer($payer)->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));

        // Put the payment creation in try and catch in case of exceptions.
        try {
            $payment->create($this->api_context);
        } catch (PayPalConnectionException $ex){
            return back()->withError('Some error occur, sorry for inconvenient');
        } catch (Exception $ex) {
            return back()->withError('Some error occur, sorry for inconvenient');
        }

        // We get 'approval_url' a paypal url to go to for payments.
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // You can set a custom data in a session
        // $request->session()->put('key', 'value');;

        // We redirect to paypal tp make payment
        if(isset($redirect_url)) {
            return redirect($redirect_url);
        }

        // If we don't have redirect url, we have unknown error.
        return redirect()->back()->withError('Unknown error occurred');
        
        
        

        return back()->with('success',"Booked Successfully, will reach you out soon!");



    }


    /**
    ** This method confirms if payment with paypal was processed successful and then execute the payment, 
    ** we have 'paymentId, PayerID and token' in query string.
    **/
    public function confirmPayment(Request $request)
    {
        // If query data not available... no payments was made.
        if (empty($request->query('paymentId')) || empty($request->query('PayerID')) || empty($request->query('token')))
            return back()->withError('Payment was not successful.');

        // We retrieve the payment from the paymentId.
        $payment = Payment::get($request->query('paymentId'), $this->api_context);

        // We create a payment execution with the PayerId
        $execution = new PaymentExecution();
        $execution->setPayerId($request->query('PayerID'));

        // Then we execute the payment.
        $result = $payment->execute($execution, $this->api_context);

        // Get value store in array and verified data integrity
        // $value = $request->session()->pull('key', 'default');

        // Check if payment is approved
        if ($result->getState() != 'approved')
            return back()->withError('Payment was not successful.');

        return back()->withSuccess('Booked Successfully, will reach you out soon!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return "Booking Show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return "Booking Edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
