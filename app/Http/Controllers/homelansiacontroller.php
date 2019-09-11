<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class homelansiacontroller extends Controller
{
    public function index()
    {
    	return view('homelansia');
    }
}
