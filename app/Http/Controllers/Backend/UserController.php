<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Gallery;
use App\Package;
use App\Booking;
use Auth;
Use File;
use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Mail;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * SHOW ALL MODEL ACCOUNTS
     */
    public function index()
    {
        $users = User::all();
        return view('backend.user.index',compact('users'));

    }

    /**
     * MODEL ACCOUNT CREATION PAGE
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * MODEL ACCOUNT CREATION
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'modelname' => 'required',
            'modelemail' => 'email',
            'modelpassword' => 'required'
        ]);

        $user = new User;
        $user->name = $request->input('modelname');
        $user->email = $request->input('modelemail');
        $user->password  = Hash::make($request->input('modelpassword'));
        $user->save();

        Mail::send([], [], function ($message) use ($request) {

            $message->from('info@montrealgents.com', 'Montreal Gentleman');
            $message->to($request->input('modelemail'))
            ->subject('Welcome '.$request->input('modelname'))
            ->setBody('<h3 style="font-weight:normal;">Hi, here is your password:  <strong>'.$request->input('modelpassword').'</strong></h3>
            <p><em>Please change your password after first login.</em></p><p><a href="'.route('login').'">'.route('login').'</a></p>','text/html');

        });
        return redirect('/admin/users')->with('success', 'User added successfully');
    }


    /**
     * MODEL ACCOUNT SHOW
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('backend.user.show', compact('user'))->with('galleryitems', $user->gallery);
    }

    /**
     * MODEL ACCOUNT DELETE
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users')->with('success', 'User deleted successfully');
    }

    /**
     * MODEL ACCOUNT APPROVAL
     */
    public function status_approve($id)
    {
        $user = User::find($id);
        $user->status = 1;
        $user->update();
        return redirect()->back()->with('success', 'This model is approved!');
    }

    /**
     * MODEL ACCOUNT DISAPPROVAL
     */
    public function status_disapprove($id)
    {
        $user = User::find($id);
        $user->status = 0;
        $user->update();
        return redirect()->back()->with('success', 'This model is disapproved!');
    }

    /**
     * MODEL DETAIL EDIT
     */
    public function  userprofiledetailchange($id, Request $request)
    {
        $this->validate($request, [
            'height' => '',
            'weight' => '',
            'age' => '',
            'hair_color' => '',
            'eye_color' => '',
            'modeldetail' => ''
        ]);

        $user = User::findOrFail($id);
        if($request->hasFile('featuredimage')){
            File::delete(public_path() . '/uploads/featuredimages/'. $user->featuredimage);
            $featuredimage= $request->file('featuredimage');
            $filename = $user->name.'_'.time().'_featured.'.$featuredimage->getClientOriginalExtension();
            Image::make($featuredimage)->crop(480,600)->save(public_path('/uploads/featuredimages/'.$filename));
            $user->featuredimage = $filename;
        }
        $user->height = $request->get('height');
        $user->weight = $request->get('weight');
        $user->age = $request->get('age');
        $user->hair_color = $request->get('haircolor');
        $user->eye_color = $request->get('eyecolor');
        $user->modeldetail = $request->get('modeldetail');
        $user->update();
        return redirect()->back()->with("success","Profile details changed successfully !");
    }

    /**
     * MODEL GALLERY SHOW
     */
    public function usergallery()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('frontend.user.mygallery')->with('user', $user)->with('galleryitems', $user->gallery);
    }

    /**
     * MODEL FEATURED IMAGE UPDATE
     */
    public function usergalleryfeatured(Request $request)
    {
        $user = User::find($id);
        if($request->hasFile('featuredimage')){
            File::delete(public_path() . '/uploads/featuredimages/'. $user->featuredimage);
            $featuredimage= $request->file('featuredimage');
            $filename = $user->name.'_'.time().'_featured.'.$featuredimage->getClientOriginalExtension();
            Image::make($featuredimage)->crop(480,600)->save(public_path('/uploads/featuredimages/'.$filename));
            $user->featuredimage = $filename;
        }
        $user->save();
        return redirect()->back()->with("success","Featured updated succesuflly!");
    }

    /**
     * MODEL GALLERY ITEM DELETE
     */
    public function gallerydestroy($id)
    {
        $galleritem = Gallery::find($id);
        File::delete(public_path() . '/uploads/galleries/'. $galleritem->galleryitem);
        $galleritem->delete();
        return redirect()->back()->with("error","User gallery item deleted succesfully !");
    }

}
