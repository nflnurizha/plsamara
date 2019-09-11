<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use auth;

class datapribadilansiacontroller extends Controller
{
    public function index()
    {
    	$profile=auth::user()->lansia;   		
    	return view('datapribadilansia', compact('profile'));
    }


}
