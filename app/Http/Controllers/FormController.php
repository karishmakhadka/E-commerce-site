<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use App\Mail\Enquiry;
use Mail;


class FormController extends Controller
{
    function index(){
    	return view('form');
    }

    function store(Request $request){
    	$data = array(
/*databaseko column*/
		'title' => $request->title,
		'description' => $request->description,
		'address' => $request->address,
		'image' => $request->image

    	);

    	Action::create($data);
    	$actions = Action::all();
    	return view('action',compact('actions'));

    	
    }

    function list(){
    	$actions = Action::all();//store ani retrive garna model chainx so Event:: model ho
    	return view('action',compact('actions'));
    }

    function edit($id){
    	$action = Action::find($id);
    	return view('edit',compact('action'));
    }

    function delete($id){
    	$action = Action::find($id);
    	$action->delete();
    	$actions = Action::all();
    	return view('action',compact('actions'));
    }

    function update(Request $request){
        $data = array(
            'title'=> $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'image' => $request->image
        );

        Action::where('id',$request->id)->update($data);
        $actions = Action::all();
        return view('action',compact('actions'));
    }

    function send_enquiry(Request $request){
        Mail::send(new Enquiry($request));


    }
}
