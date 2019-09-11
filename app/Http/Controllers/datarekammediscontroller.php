<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekam_Medis;

class datarekammediscontroller extends Controller
{
    public function index()
    {
    	return view('datarekammedis');
    }

    public function data()
    {
    	$data=Rekam_Medis::orderBy('created_at','desc')->get();
    	return view ('datarekammedis',compact('data'));
    }
    public function destroy($id)
    {

        $data = Rekam_Medis::FindOrfail($id);
        if($data == null){
            return redirect()->back()->with('error','data not found');
        }
        else{
        $data -> delete();
        return redirect('datarekammedis');
    }
}
}