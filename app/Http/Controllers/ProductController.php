<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::all();
        return view('admin.product.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all();
        return view('admin.product.form',compact('cats'));
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
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'detail' => $request->detail,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'size' => $request->size,
        );

        $pro = Items::create($data);

        if($request->hasFile('image')) {
                $image_name = $pro->id . '-image-'.date('YmdHis') . '.'.$request->image->extension();
                $path = $request->image->move('uploads/items/', $image_name);
                $pro->image = $image_name;
                $pro->save();
            }

        return redirect()->route('products.index');
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

        $product = Items::find($id);
        $cats = Category::all();
        
        return view('admin.product.edit',compact('product','cats'));

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
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'image' => $request->image,
            'detail' => $request->detail,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'size' => $request->size,
        );

        $item = Items::where('id',$id)->update($data);
        return redirect()->route('products.index')->with('message','Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Items::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    public function search(Request $request){
        $items = Items::where('title','like','%'.$request->keyword.'%')->paginate(12);

        return view('admin.product.search', compact('items'));
    }
}
