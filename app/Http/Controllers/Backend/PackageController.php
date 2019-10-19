<?php

namespace App\Http\Controllers\Backend;

use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function edit(Package $package)
    {
        return view('backend.packages.index', compact('package'));
        
    }
    public function update(Request $request, Package $package)
    {

        $this->validate($request, [
            'onehour'             => '',
            'threehour'            => '',
            'eighthour'           => '',
            'twentyfourhour'      => '',
            'weekend'             => '',
            'week'                => '',
        ]);

        $package->onehour = $request->onehour;
        $package->threehour = $request->threehour;
        $package->eighthour = $request->eighthour;
        $package->twentyfourhour = $request->twentyfourhour;
        $package->weekend = $request->weekend;
        $package->week = $request->week;
        $package->save();
        return redirect()->route('package.edit', ['package'=>1])->with('success','Saved Succefully');
    }
}
