<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoeController extends Controller
{
    function index(){
    	return view('shoes');
    }

    
}
