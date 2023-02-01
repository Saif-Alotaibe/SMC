<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Post, City, Category, Photo};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function add(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'city' => 'required',
            'location_details' => 'required',
            "image" => "required"
        ]);

        $post = new Post;
        $photo = new Photo;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->price = number_format($request->price, 2, ".", "");
        $post->is_negotiable = $request->is_negotiable === "on";
        $post->is_new = $request->is_new === 'New';
        $post->location_details = $request->location_details;
        $post->seller_id = Auth::guard('sellers')->user()->id;
        $post->city_id = $request->city;
        $post->category_id = $request->category;
        $post->save();

        // TODO move them into rabbit mq broker (if we have time)
        $path = Storage::disk('oss')->put('media/' . $post->id, $request->image);
        $path = Storage::disk('oss')->url($path);
        $photo->url = $path;
        $photo->post_id = $post->id;
        $photo->save();

        return redirect("/seller/myPosts");

    }

    public function update(Request $request){
        $post = DB::table('posts')->where('id', $request->id)->update([
            "title" => $request->title,
             'description' =>  $request->description,
             "price" => number_format($request->price, 2),
             "is_negotiable" => $request->is_negotiable === "on",
             "is_new" => $request->is_new === 'New',
             "location_details" => $request->location_details,
             "seller_id" => Auth::guard('sellers')->user()->id,
             "city_id" => $request->city,
             "category_id" => $request->category

        ]);
        // TODO: handle photos
        return redirect("/seller/myPosts");
 
    }

    public function delete(Request $request){
        $res = Post::where("id", $request->id)->delete();
        return redirect("/seller/myPosts");
    }
}
