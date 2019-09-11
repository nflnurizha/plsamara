<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lansia;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;

class inputdatalansiacontroller extends Controller
{
    public function index()
    {
    	return view('inputdatalansia');
    }
    public function simpan(Request $request)
    {

    // $valid = $this->validator($request->all())->validate();
// ->validate();


    $validatedData = $request->validate([
        'nama' => 'required',
        'tempatlahir' => 'required',
        'tanggallahir' => 'required',
        'nohp' => 'required',
        'namakel' => 'required',
        'nohp_kel' => 'required',
        'agama' => 'required',
        'jeniskel' => 'required',
        'alamat' => 'required',
        'pendidikan' => 'required',
        'statper' => 'required',
        'username' => 'required',

    ]);
     $user = $this->create($request->all());



    $simpan = Lansia::create([
        'id_lansia' => $user->id,
    	'nama' => $request->nama,
        'tempat_lahir' => $request->tempatlahir,
    	'tgllahir' => $request->tanggallahir,
        'nohp' => $request->nohp,
    	'nama_keluarga' => $request->namakel,
        'nohp_kel' => $request->nohp_kel,
    	'agama' => $request->agama,
    	'jenis_kelamin' => $request->jeniskel,
    	'alamat' => $request->alamat,
    	'pendidikan' => $request->pendidikan,
    	'status_perkawinan' => $request->statper,
    ]);
    

    

    return redirect("/datalansia") -> with ('succes','Input Data Lansia Berhasil'); 

    // The blog post is valid...
}
protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['nama'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

