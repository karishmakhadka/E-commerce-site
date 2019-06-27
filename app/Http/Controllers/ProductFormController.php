<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 

    public function index()
    {
        $products = Product::all();//store ani retrive garna model chainx so Event:: model ho
        return view('product_action',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('p_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = array(
            'title' => $request->title,
            'detail' => $request->detail,
            'slug' => str_slug($request->title,'-')
        );

        if($product = Product::create($data))
            {
                if ($request->hasFile('image')) 
                    {
                        $image_name = $product->slug . '-'.$product->id . '.'.$request->image->extension();
                        $path = $request->image->move('img/product/', $image_name);
                        $product->image = $image_name;
                        $product->save();
                    }
                return redirect()->route('product_form.index')->with('message','Added Successfully');
            }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product_edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'title'=> $request->title,
            'detail' => $request->detail,
        );
        
        Product::where('id',$id)->update($data);
        return redirect()->route('product_form.index')->with('message','Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if($product->image && file_exists(public_path('img/product/'.$product->image))){
            unlink(public_path('img/product/'.$product->image));
        }
        $product->delete();
        return redirect()->route('product_form.index')->with('message','Added Successfully');
    }
}
