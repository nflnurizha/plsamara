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
}
