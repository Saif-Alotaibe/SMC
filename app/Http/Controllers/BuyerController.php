<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Post, City, Category, Photo};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BuyerController extends Controller
{
    public function index(){
        return view('Buyer.index', [
            'numOfPosts' => Post::all()->count(),
            "numOfCategories" => Category::all()->count(),
            "numOfCities" => City::all()->count()
        ]);
    }

    public function categories(){
        return view('Buyer.categories', [
            'categories'=>Category::all()
            ]);
    }
    public function category($id){
        return view('Buyer.category', [
            'categoryPosts'=> Post::where('category_id', $id)->get()
        ]);
    }

    public function posts(){
        return view('Buyer.posts', [
            'posts'=> Post::all()
        ]); 
    } 

    public function post($id){
        return view('Buyer.post', [
            'post'=> Post::where('id', $id)->get()[0],
            'city'=> City::where('id', Post::where('id', $id)->get()[0]->city_id)->get()[0]->name
        ]);  
    }
}
