<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekam_Medis;
use auth;

class datarekammedislansiacontroller extends Controller
{
    public function show()
    {
    	$data=auth::user()->lansia->Rekam_Medis;
    	return view('drm', compact('data'));
    }
}
