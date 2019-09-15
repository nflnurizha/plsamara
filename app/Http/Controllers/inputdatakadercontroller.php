<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kader;
use Auth;

class inputdatakadercontroller extends Controller
{
    public function index()
    {
    	return view('inputdatakader');
    }
    public function simpan(Request $request)
    {
    $validatedData = $request->validate([
        'nama' => 'required',
        'tempatlahir' => 'required',
        'tanggallahir' => 'required',
        'nohp_kader' => 'required',
        'pendidikan' => 'required',
        'jabatan' => 'required',
        'alamat' => 'required',

    ]);

    $simpan = Kader::create([
        'id_kader' => Auth::user()->id,
    	'nama' => $request->nama,
        'tempat_lahir' => $request->tempatlahir,
    	'tgllahir' => $request->tanggallahir,
        'nohp_kader' => $request->nohp_kader,
    	'pendidikan' => $request->pendidikan,
    	'jabatan' => $request->jabatan,
    	'alamat' => $request->alamat,
    ]);
    return redirect("/datakader") -> with ('succes','Input Data Kader Berhasil'); 

    // The blog post is valid...
}
}
