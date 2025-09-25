<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    

    public function index()
    {
        
        $categories = Category::all();
        return view('home', [
            'categories' => $categories
        ]);

         $categories = Category::with(['posts' => function($query) {
        $query->latest()->take(2); 
    }])->get();

    return view('home', [
        'categories' => $categories
    ]);
    }
}
