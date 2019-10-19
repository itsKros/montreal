<?php

namespace App\Http\Controllers\Backend;

use App\Servicesinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class servicesinfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function edit(servicesinfo $servicesinfo)
    {
        return view('backend.servicesinfo', compact('servicesinfo'));
    }

    public function update(Request $request, servicesinfo $servicesinfo)
    {
        $this->validate($request, [
            'ser_first_content'       => 'nullable',
            'ser_second_content'      => 'nullable',
            'ser_request_encounter'      => 'nullable',
        ]);

        $servicesinfo->ser_first_content = $request->ser_first_content;
        $servicesinfo->ser_second_content = $request->ser_second_content;
        $servicesinfo->ser_request_encounter = $request->ser_request_encounter;
        
        $servicesinfo->save();
        
        return redirect()->route('servicesinfo.edit', ['servicesinfo'=>1])->with('success','Services data updated successfully!');
    }
}
