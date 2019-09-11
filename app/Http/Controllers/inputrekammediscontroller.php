<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekam_Medis;
use Auth;

class inputrekammediscontroller extends Controller
{
    // public function index()
    // {
    //     return view('inputrekammedis');
    // }
    public function show($id)
    {
        return view ('tambahrekammedis',compact('id'));
    	// return view('tambahrekammedis');
    }

 	public function simpan(Request $request, $id)
    {
        // $ubah = Rekam_Medis::FindOrfail($id);
        // if($ubah == null){
        //     return redirect()->back()->with('error','data not found');
        // }
        // else{

         $validatedData = $request->validate([
        'tb' => 'required',
        'bb' => 'required',
        'sistolik' => 'required',
        'diastolik' => 'required',
        'nadi' => 'required',
        // 'gs' => 'required',
        // 'gp' => 'required',
        // 'ks' => 'required',
        // 'kp' => 'required',
        'au' => 'required',

    ]);

    $simpan = Rekam_Medis::create([
        'id_lansia' => $id,
        'id_kader' => Auth::user()->id,
        'tinggi_badan' => $request->tb,
        'berat_badan' => $request->bb,
        'sistolik' => $request->sistolik,
        'diastolik' => $request->diastolik,
        'nadi' => $request->nadi,
        'gula_sesaat' => $request->gs,
        'gula_puasa' => $request->gp,
        'kolesterol_sesaat' => $request->ks,
        'kolesterol_puasa' => $request->kp,
        'asam_urat' => $request->au,
    ]);
        

    return redirect("/datarekammedis") -> with ('succes','Input Data Rekam Medis Berhasil'); 
            }   
    }
    
