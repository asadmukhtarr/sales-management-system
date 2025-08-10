<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// test route ...
Route::get('/test',action: function(){
    return "Hello World";
});
// khuram ...
Route::get('/khurram',function(){
    return "Hello Khuram";
});