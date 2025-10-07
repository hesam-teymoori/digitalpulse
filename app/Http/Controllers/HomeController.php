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
    

        $categoriesWithPosts = Category::with(['posts' => function($query) {
        $query->latest()->take(2); 
        }])->get();
        
        $posts = Post::latest()->get();

        return view('home', [
        'categories' => $categories,
        'categoriesWithPosts' => $categoriesWithPosts,
        'posts' => $posts,
        ]);
    }
}
