<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.products.create');
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
    
}
