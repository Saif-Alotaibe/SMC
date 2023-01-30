<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BuyerController;
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

Route::get('/seller', [SellerController::class, "index"])->name("seller.dashboard");
Route::get("/seller/myPosts", [SellerController::class, "myPosts"]);
Route::get("/seller/addPost", [SellerController::class, "addPost"]);

Route::post("/post/add", [PostController::class, "add"])->name("post.add");
Route::post("/post/update", [PostController::class, "update"])->name("post.put");
Route::post("/post/delete", [PostController::class, "delete"])->name("post.delete");

// buyer routs
Route::get('/buyer', [BuyerController::class, "index"])->name("buyer.dashboard");
Route::get('/buyer/categories', [BuyerController::class, "categories"])->name("buyer.categories");
Route::get('/buyer/category/{id}', [BuyerController::class, "category"])->name("buyer.category");
Route::get('/buyer/posts', [BuyerController::class, "posts"])->name("buyer.posts");
Route::get('/buyer/post/{id}', [BuyerController::class, "post"])->name("buyer.post");

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



Route::get("/test", function(){
    return view("Seller.icons");
});