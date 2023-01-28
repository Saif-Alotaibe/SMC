<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Post, City, Category, Photo};
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function add(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'city' => 'required',
            'location_details' => 'required'
        ]);

        //dd($request->all());
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->price = number_format($request->price, 2);
        $post->is_negotiable = $request->is_negotiable === "on";
        $post->is_new = $request->is_new === 'New';
        $post->location_details = $request->location_details;
        $post->seller_id = Auth::guard('sellers')->user()->id;
        $post->city_id = $request->city;
        $post->category_id = $request->category;
        // TODO: handle photos
        $post = $post->save();
       

        return redirect("/seller/myMaterials");

    }
}
