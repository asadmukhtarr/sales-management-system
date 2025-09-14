<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category = category::orderby('id','desc')->get();
        return view('admin.products.categories',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $category = new category;
        $category->title = $request->title;
        $category->save();
        return redirect()->back()->with('success','Category Creted Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category = category::find($id);
        return view('admin.products.editcategory',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $category = category::find($id);
        $category->title = $request->title;
        $category->save();
        return redirect(route('categories.index'))->with('success','category updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = category::find($id);
        $category->delete();
        return redirect()->back()->with('warning','Category Deleted Successfully');
    }
}
