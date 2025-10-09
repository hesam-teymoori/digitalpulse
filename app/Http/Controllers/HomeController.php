<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
class HomeController extends Controller
{
    

    public function index()
    {
        
        $categories = Category::all();
    
        $posts = Post::latest()->get();

        $numberposts = Post::latest()->paginate(10);

        $hotPosts = Post::orderBy('views', 'desc')->take(4)->get();

        return view('home', [
        'categories' => $categories,
        'posts' => $posts,
        'hotPosts' => $hotPosts,
        'numberposts' => $numberposts,
        ]);
    }
}
