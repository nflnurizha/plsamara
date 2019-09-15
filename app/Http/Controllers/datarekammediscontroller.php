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

    public function tampil($id)
    {
        $data = Rekam_Medis::find($id);
        return view ('showrekammedis',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Rekam_Medis::find($id);
       
        $data->tinggi_badan = $request->tb; 
        $data->berat_badan = $request->bb;
        $data->sistolik = $request->sistolik;
        $data->diastolik = $request->diastolik;
        $data->nadi = $request->nadi;
        $data->gula_sesaat = $request->gs;
        $data->gula_puasa = $request->gp;
        $data->kolesterol_sesaat = $request->ks;
        $data->kolesterol_puasa = $request->kp;
        $data->asam_urat = $request->au;

        $data->save();
        return redirect('datarekammedis');
    }
}