<?php

namespace App\Http\Controllers\Frontend;

use App\Gallery;
use Auth;
Use File;
use Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        
        if($request->hasFile('galleryitem')){
            //File::delete(public_path() . '/uploads/galleries/'. $user->galleryitem);
            
            $galleryitem= $request->file('galleryitem');
            
            $filename = $user->name.'_g_'.time().'.'.$galleryitem->getClientOriginalExtension();
            Image::make($galleryitem)->resize(480,606)->save(public_path('/uploads/galleries/'.$filename));
            
            $gallery = new Gallery;
            $gallery->galleryitem = $filename;
            $gallery->user_id = $user->id;
            $gallery->save();
            return redirect('my-gallery')->with("success","Gallery item add succesfully !");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galleryy  $galleryy
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galleryy  $galleryy
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galleryy  $galleryy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galleryy  $galleryy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galleritem = Gallery::find($id);
        File::delete(public_path() . '/uploads/galleries/'. $galleritem->galleryitem);
        $galleritem->delete();
        return redirect('my-gallery')->with("error","Gallery item deleted succesfully !");
    }
}
