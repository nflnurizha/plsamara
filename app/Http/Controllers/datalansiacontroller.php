<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lansia;

class datalansiacontroller extends Controller
{
    public function index()
    {
    	return view('datalansia');
    }

    public function data()
    {
    	$data=lansia::orderBy('created_at','desc')->get();
    	return view ('datalansia',compact('data'));
    }

    public function destroy($id)
    {
    	$data = lansia::find($id);
        $data -> delete();
        return redirect('datalansia');
    }   

    public function show($id)
    {
        $data = lansia::find($id);
        return view ('showdatalansia',compact('data'));
    }
}
