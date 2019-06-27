<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Items;

class IndexController extends Controller
{
    function index(){
    	return view('dashboard');
    }

    function category(Category $category){
    	$products = Items::where('category_id',$category->id)->get();
    	return view('page',compact('category','products'));
         
    }

    function productDetail($category, Items $item){
    	$title = Category::where('title',$category)->first();
         return view('product-detail',compact('title','category','item'));
    }

    
}
