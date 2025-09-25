<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    

    public function show($id){

        $post = Post::findOrFail($id);

        $post->incrementViews();

        return view('posts.show', ["post" => $post]);
    }
}
