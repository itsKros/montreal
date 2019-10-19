<?php



namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\User;
use App\Booking;
use App\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $bookings = Booking::all();
        return view('backend.home', compact('bookings'));
    }
    public function homeinfo()
    {
        return view('backend.homeinfo');
    }

    
}
