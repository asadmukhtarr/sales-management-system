<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class pagesController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard');
    }
    // products ...
    public function products(){
        return view('admin.products.products');
    }
    // create products ...
    public function create_product(){
        $categories = category::all();
        return view('admin.products.create',compact('categories'));
    }
    // save product ..
    public function save_product(Request $request){
           $validated = $request->validate([
                'title' => 'required|min:5',
                'description' => 'required',
                'price' => 'required',
                'category' => 'required',
                'image' => 'required',
            ]);
        return $request;
    }
    // for sales sections ...
    public function new_sales(){
        return view('admin.sales.new');
    }
    public function sales(){
        return view('admin.sales.sales');
    }
    // users ...
    public function add_user(){
        return view('admin.users.add');
    }
    // users all ..
    public function users(){
        return view('admin.users.users');
    }
    // analytics ...
    public function analytics(){
        return view('admin.analytics');
    }
    // analytics
    // categories 
    public function categories(){
        return view('admin.products.categories');
    }
    
}
