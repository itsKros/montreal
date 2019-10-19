<?php

namespace App\Http\Controllers\Backend;

use App\Testimonial;
Use File;
use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TestimonialController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backend.testimonial.index', compact('testimonials'));
    }


    public function create()
    {
        return view('backend.testimonial.create');
    }


    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $this->validate($request, [
            'author_name' => 'required',
            'author_desig' => 'required',
            'desc' => 'required'
        ]);
        $testimonial->author_name = $request->get('author_name');
        $testimonial->author_desig = $request->get('author_desig');
        $testimonial->desc = $request->get('desc');

        if($request->hasFile('author_img')){

            $author_img= $request->file('author_img');
            $filename = time().'_desc.'.$author_img->getClientOriginalExtension();
            Image::make($author_img)->crop(80,80)->save(public_path('uploads/testimonials/'.$filename));
            $testimonial->author_img = $request->author_img = $filename;
        }
        $testimonial->save();
        return redirect()->back()->with("success","Testimonial added successfully!");
    }

    public function show(Testimonial $testimonial)
    {
        //
    }

    public function edit($id)
    {

        $testimonial = Testimonial::find($id);

        return view('backend.testimonial.edit')->with('testimonial', $testimonial);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'author_name' => 'required',
            'author_desig' => 'required',
            'desc' => 'required'
        ]);
        $testimonial = Testimonial::find($id);
        $testimonial->author_name = $request->get('author_name');
        $testimonial->author_desig = $request->get('author_desig');
        $testimonial->desc = $request->get('desc');

        if($request->hasFile('author_img')){

            $author_img= $request->file('author_img');
            $filename = time().'_desc.'.$author_img->getClientOriginalExtension();
            Image::make($author_img)->crop(80,80)->save(public_path('uploads/testimonials/'.$filename));
            $testimonial->author_img = $request->author_img = $filename;
        }
        $testimonial->save();
        return redirect()->back()->with("success","Testimonial updated successfully!");
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial = Testimonial::find($testimonial->id);
        File::delete(public_path() . '/uploads/testimonials/'. $testimonial->author_img);
        $testimonial->delete();
        return redirect('/admin/testimonial')->with('success', 'Testimonial deleted successfully');
    }
}
