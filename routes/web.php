<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/seller', function () {
    return view('Seller.index');
});

Route::get("/seller/myMaterials", function(){
    return view("Seller.order");
});

Route::get("/seller/addMaterials", function(){
    return view("Seller.add");
});

Route::get('/seller/login', function(){
    return view("Seller.login");
});

Route::get("/", function(){
    return view("Buyer.index");
});

Route::get("/buyer/login", function(){
    return view("Buyer.login");
});

Route::get('/buyer/category/{id}', function(){
    return view("Buyer.categories");
});

Route::get('/buyer/posts/{id}', function(){
    return view("Buyer.posts");
});


Route::get('/buyer/post/{id}', function(){
    return view("Buyer.post");
});


Route::get("/test", function(){
    return view("Seller.icons");
});