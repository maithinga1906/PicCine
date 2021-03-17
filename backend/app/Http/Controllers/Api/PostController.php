<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Style;
class PostController extends Controller
{
// Show all the posts
    public function show()
    {
        return response()->json(Post::all(),200); 
    }

// post a new story
    public function post(Request $request)
    {
        $posts = Post::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'content' => $request->content,
            'image'=>$request->image,
            'style_id' => $request->style_id,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ]);
        return response()->json(['data'=>$posts]);
    }

// update the post
    public function update(Request $request, Post $posts)
    {
        $update_post = $posts->update(
            $request->only(['title', 'content', 'image','style_id'])
        );

        return response()->json([
            'update_post' => $update_post
        ]);
    }

// uploads the image for a product we created and returns the url for the product.
    public function uploadFile(Request $request)
    {
        if($request->hasFile('image')){
            $images = time()."_".$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $images);
        }
        return response()->json(asset("images/$images"),201);
    }

// deletes an post.
    public function destroy(Post $post)
    {
        $status = $post->delete();

        return response()->json([
            'status' => $status
        ]);
    }
}
