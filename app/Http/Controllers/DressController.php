<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class DressController extends Controller
{
    function index(){
    	$products = Product::all();

    	return view('dress',compact('products'));
    }

    function detail($id){
    	$product = Product::find($id);
    	return view('detail',compact('product'));
    }
}
