<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

Route::get('/', function () {
    return view('auth.login');
});
Route::prefix('admin')->group(function(){
    // dashboard ...
    Route::get('/dashboard',[pagesController::class,'dashboard'])->name('admin.dashboard');
    // products ..
    Route::prefix('products')->group(function(){
        Route::get('/create',[pagesController::class,'create_product'])->name('admin.products.create');
        Route::get('/categories',[pagesController::class,'categories'])->name('admin.categories');
        Route::get('/',[pagesController::class,'products'])->name('admin.products');
    });
    // sales ..
    Route::prefix('sales')->group(function(){
        Route::get('/new',[pagesController::class,'new_sales'])->name('admin.new.sales');
        Route::get('/',[pagesController::class,'sales'])->name('admin.sales');
    });
    // for users ...
    Route::prefix('users')->group(function(){
        Route::get('/',[pagesController::class,'users'])->name('admin.users');
    });
    // analytics ..
    Route::get('analytics',[pagesController::class,'analytics'])->name('analytics');

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
