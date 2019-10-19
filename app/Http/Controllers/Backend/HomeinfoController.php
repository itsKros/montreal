<?php

namespace App\Http\Controllers\Backend;

use App\Homeinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeinfoController extends Controller
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
     * Edit the Homeinfo data.
     *
     * @param Homeinfo $homeinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeinfo $homeinfo)
    {
        return view('backend.homeinfo', compact('homeinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Homeinfo $homeinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeinfo $homeinfo)
    {
        $this->validate($request, [
            'welcometitle'             => 'nullable',
            'welcomecontent'           => 'nullable',
            'ete_first_title'          => 'nullable',
            'ete_first_content'        => 'nullable',
            'ete_second_title'         => 'nullable',
            'ete_second_content'       => 'nullable',
        ]);

        $homeinfo->welcometitle = $request->welcometitle;
        $homeinfo->welcomecontent = $request->welcomecontent;
        $homeinfo->ete_first_title = $request->ete_first_title;
        $homeinfo->ete_first_content = $request->ete_first_content;
        $homeinfo->ete_second_title = $request->ete_second_title;
        $homeinfo->ete_second_content = $request->ete_second_content;
        $homeinfo->save();
        

        return redirect()->route('homeinfo.edit', ['homeinfo'=>1])->with('success','Home data updated successfully!');
    }
}
