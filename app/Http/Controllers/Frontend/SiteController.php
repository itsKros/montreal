<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Booking;
use App\Homeinfo;
use App\Aboutinfo;
use App\Servicesinfo;
use App\Testimonial;
use App\User;
use Square;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth')->only('myaccount','myprofile');
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
    **/
    public function index()
    {
        $homeinfo = Homeinfo::find(1);
        $users = User::all()->where('status','=', 1);
        $testimonials = Testimonial::all();
        return view('frontend.home',compact('homeinfo','users', 'testimonials'));
    }

    public function testmail()
    {
        $data = array(
            'name' => "Montreal Test Mail",
        );
    
        Mail::send('welcome', $data, function ($message) {
    
            $message->from('ssquaresdev@gmail.com', 'Montreal Admin');
    
            $message->to('roshan@ssquares.co.in')->subject('Montreal Test Mail');
    
        });
    
        return "Your email has been sent successfully";
    }

    public function about()
    {
        $aboutinfo = Aboutinfo::find(1);
       return view('frontend.about')->with('aboutinfo', $aboutinfo);
    }
    
    public function services()
    {
        $servicesinfo = Servicesinfo::find(1);
       return view('frontend.services')->with('servicesinfo', $servicesinfo);
    }
    public function contact()
    {
       return view('frontend.contact');
    }

    public function pay(){
        $amount = 100;

        $formNonce = 'some nonce'; 

        $location_id = 'G1KKRWDA3S9SW'; 

        $currency = 'CAD';

        $options = [
        'amount' => $amount,
        'location_id' => $location_id,
        'currency' => $currency
        ];

        Square::chargeWithHttpInfo($options); 
    }
    
    
}
