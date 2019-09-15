<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lansia;

class datalansiacontroller extends Controller
{
    public function index()
    {
    	return view('datalansia');
    }

    public function data()
    {
    	$data=Lansia::orderBy('created_at','desc')->get();
    	return view ('datalansia',compact('data'));
    }

    public function destroy($id)
    {
    	$data = Lansia::find($id);
        $data -> delete();
        return redirect('datalansia');
    }   

    public function show($id)
    {
        $data = Lansia::find($id);
        return view ('showdatalansia',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Lansia::find($id);
       
        $data->nama = $request->nama; 
        $data->tempat_lahir = $request->tempatlahir;
        $data->tgllahir = $request->tanggallahir;
        $data->nohp = $request->nohp;
        $data->agama = $request->agama;
        $data->nama_keluarga = $request->namakel;
        $data->nohp_kel = $request->nohp_kel;
        $data->jenis_kelamin = $request->jeniskel;
        $data->alamat = $request->alamat;
        $data->pendidikan = $request->pendidikan;
        $data->status_perkawinan = $request->statper;

        $data->save();
        return redirect('datalansia');
    }
}
