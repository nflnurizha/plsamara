<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kader;

class datakadercontroller extends Controller
{
    public function index()
    {
    	return view('datakader');
    }
    public function data()
    {
    	$data=Kader::orderBy('created_at','desc')->get();
    	return view ('datakader',compact('data'));
    }

    public function destroy($id)
    {
    	$data = Kader::find($id);
        $data -> delete();
        return redirect('datakader');
    }
    public function show($id)
    {
        $data = Kader::find($id);
        return view ('showdatakader',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Kader::find($id);
       
        $data->nama = $request->nama; 
        $data->tempat_lahir = $request->tempatlahir;
        $data->tgllahir = $request->tanggallahir;
        $data->nohp_kader = $request->nohp_kader;
        $data->pendidikan = $request->pendidikan;
        $data->jabatan = $request->jabatan;
        $data->alamat = $request->alamat;

        $data->save();
        return redirect('datakader');
    }
}
