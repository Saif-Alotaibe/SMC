<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\PostController;
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
})->name("seller.dashboard");

Route::get("/seller/myPosts", [SellerController::class, "myPosts"]);

Route::get("/seller/addPost", [SellerController::class, "addPost"]);

Route::post("/post/add", [PostController::class, "add"])->name("post.add");

Route::get("/buyer", function () {
    return view("Buyer.index");    
})->name("buyer.dashboard");

Route::get("/", function(){
    return view("Common.index");
})->name('common.index');

Route::get("/register", function () {
    return view("Common.register");
})->name("common.register");

Route::get("/login", function () {
    return view("Common.login");
})->name("common.login");

Route::post("/register", [CommonController::class, 'register']);

Route::post("/login", [CommonController::class, 'login']);

Route::get("/logout", [CommonController::class, 'logout'])->name("common.logout");

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