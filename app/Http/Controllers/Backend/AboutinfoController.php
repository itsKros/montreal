<?php

namespace App\Http\Controllers\Backend;

use App\Aboutinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class aboutinfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function edit(aboutinfo $aboutinfo)
    {
        return view('backend.aboutinfo', compact('aboutinfo'));
    }

    public function update(Request $request, aboutinfo $aboutinfo)
    {
        $this->validate($request, [
            'abt_first_content'             => 'nullable',
            'abt_second_content'      => 'nullable',
        ]);

        $aboutinfo->abt_first_content = $request->abt_first_content;
        $aboutinfo->abt_second_content = $request->abt_second_content;
        $aboutinfo->save();
        
        return redirect()->route('aboutinfo.edit', ['aboutinfo'=>1])->with('success','About data updated successfully!');
    }
}
