<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{City, Category, Post};
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function addPost(){
        return view("Seller.add", ['cities' => City::all(), 'categories' => Category::all()]);
    }

    public function myPosts(){
        
        return view('Seller.my-posts', ['posts' => Post::where("seller_id", Auth::guard('sellers')->user()->id)->get()]);
    }
}
