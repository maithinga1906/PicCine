<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function show()
    {
        return response()->json(Post::all(),200); 
    }
    public function post(Request $request)
    {
        $posts = Post::create([
            'photographer_id' => $request->photographer_id,
            'title' => $request->title,
            'content' => $request->content,
            'image'=>$request->image,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ]);
        return response()->json(['data'=>$posts]);
    }
}
