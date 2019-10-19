<?php

namespace App\Http\Controllers\Backend;

use App\Footerinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterinfoController extends Controller
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
     * Edit the Footerinfo data.
     *
     * @param Footerinfo $footerinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Footerinfo $footerinfo)
    {
        return view('backend.footerinfo', compact('footerinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Footerinfo $footerinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footerinfo $footerinfo)
    {
        $this->validate($request, [
            'aboutmg'     => 'nullable',
            'joinus'      => 'nullable',
            'email'       => 'nullable',
            'email_2'     => 'nullable',
            'phone'       => 'nullable',
        ]);

        $footerinfo->aboutmg = $request->aboutmg;
        $footerinfo->joinus = $request->joinus;
        $footerinfo->email = $request->email;
        $footerinfo->email_2 = $request->email_2;
        $footerinfo->phone = $request->phone;
        $footerinfo->save();
        

        return redirect()->route('footerinfo.edit', ['footerinfo'=>1])->with('success','Footer data updated successfully!');
    }
}
