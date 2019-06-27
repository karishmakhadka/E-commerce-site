<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::all();
        return view('admin.category.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id',0)->get();
        return view('admin.category.create',compact('categories'));
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
            'parent_id'=> $request->parent,
            'title'=> $request->title,
            'slug'=> str_slug($request->title),
            'detail'=>$request->detail,

        );

        $cat = Category::create($data);

        if($request->hasFile('image')){
            $image_name = $cat->id . '-image-'.date('YmdHis') . '.'.$request->image->extension();
                $path = $request->image->move('uploads/category/', $image_name);
                $cat->image = $image_name;
                $cat->save();        
            }

            return redirect()->route('categories.index');
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
        $cat = Category::find($id);
        $categories = Category::where('parent_id',0)->get();
        return view('admin.category.edit',compact('cat','categories'));
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
            'parent_id' => $request->parent,
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'image' => $request->image,
            'detail' => $request->detail,
            
        );

        $category = Category::where('id',$id)->update($data);
        return redirect()->route('categories.index')->with('message','Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if($category->image && file_exists(public_path('uploads/category/'.$category->image))){
            unlink(public_path('uploads/category/'.$category->image));
        }
        $category->delete();
        return redirect()->route('categories.index')->with('message','Added Successfully');
    }
}
