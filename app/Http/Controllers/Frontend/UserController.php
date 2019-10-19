<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Gallery;
use App\Package;
use App\Booking;
use App\Servicesinfo;
use Auth;
Use File;
use Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Mail;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * ALL APPROVED MODELS
     */
    public function index()
    {
        $users = User::all()->where('status','=', 1);
        return view('frontend.user.index',compact('users'));
    }

    /**
     * APPROVED MODELS SINGLE PAGE 
     */
    public function show($id)
    {
        $user = User::find($id);
        $packages = Package::all();
        $service_encounter = Servicesinfo::find(1);
        if($user->status == 1){
            return view('frontend.user.show', compact('user'))
            ->with('galleryitems', $user->gallery)
            ->with('packages',$packages)
            ->with('bookings',$user->bookings)
            ->with('service',$service_encounter);
        }
        else {
            return "<h1>Model Not Available</h1>";
        }
    }
    
    /**
     * MODELS MY ACCOUNT SHOW
     */
    public function myaccount()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('frontend.user.myaccount')->with('user', $user);
    }

        
    /**
     * MODELS MY ACCOUNT DETAILS EDIT (name, email, profile picture, password )
     */
    public function accountdetailchange(Request $request)
    {
        $user = Auth::user();

        if($request->get('currentpassword') && $request->get('newpassword') && $request->get('confirmnewpassword')){
            if (!(Hash::check($request->get('currentpassword'), Auth::user()->password))) {
                return redirect('my-account')->with("error","Your current password does not matches.");
            }

            if(strcmp($request->get('currentpassword'), $request->get('newpassword')) == 0){
                return redirect('my-account')->with("error","New Password cannot be same as current password.");
            }
        }

        $validatedData = $request->validate([
            'name' => '',
            'email' => '',
            'current-password' => 'bail',
            'new-password' => 'nullable|string|min:8|confirmed',
        ]);

        if($request->hasFile('avatar')){
            File::delete(public_path() . '/uploads/avatars/'. $user->avatar);
            $avatar= $request->file('avatar');
            $filename = $user->name.'_'.time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename))->destroy();
            $user->avatar = $filename;
        }

        
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('newpassword'));
        $user->save();
        return redirect('my-account')->with("success","Account details changed successfully !");
        
    }


    /**
     * MODELS PROFILE DETAILS SHOW
     */
    public function myprofile() 
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('frontend.user.myprofile')->with('user', $user);
    }


    /**
     * MODELS PROFILE DETAILS EDIT (height, weight, age, description etc.)
     */
    public function profiledetailchange(Request $request)
    {
        $this->validate($request, [
            'height' => '',
            'weight' => '',
            'age' => '',
            'hair_color' => '',
            'eye_color' => '',
            'modeldetail' => 'required'
        ]);

        $user = Auth::user();
        $user->height = $request->get('height');
        $user->weight = $request->get('weight');
        $user->age = $request->get('age');
        $user->hair_color = $request->get('haircolor');
        $user->eye_color = $request->get('eyecolor');
        $user->modeldetail = $request->get('modeldetail');
        $user->save();
        return redirect('my-profile')->with("success","Profile details changed successfully !");
        
    }

    /**
     * MODELS GALLERY SHOW
     */
    public function mygallery() {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('frontend.user.mygallery')->with('user', $user)->with('galleryitems', $user->gallery);
    }


    /**
     * MODELS FEATURED IMAGE
     */
    public function galleryfeatured(Request $request){
        
        $user = Auth::user();
        if($request->hasFile('featuredimage')){
            File::delete(public_path() . '/uploads/featuredimages/'. $user->featuredimage);
            $featuredimage= $request->file('featuredimage');
            $filename = $user->name.'_'.time().'_featured.'.$featuredimage->getClientOriginalExtension();
            Image::make($featuredimage)->crop(480,600)->save(public_path('/uploads/featuredimages/'.$filename));
            $user->featuredimage = $filename;
        }
        $user->save();
        return redirect('my-gallery')->with("success","Featured updated succesuflly!");
    }

    /**
     * MODELS ALL BOOKINGS
     */
    public function mybooking(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('frontend.user.mybooking')->with('user', $user)->with('bookings', $user->bookings);
    }

    /**
     * MODELS AVAILABILITY
     */
    public function myavailability(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('frontend.user.myavailability')->with('user', $user);
    }
}


