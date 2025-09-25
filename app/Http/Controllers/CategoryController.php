<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
     public function show ($id) 
    {
      $category = Category::findOrFail($id);

       $posts = $category->posts()->latest()->paginate(10); 
           
      return view('category.show' , [
        'category' => $category,
        'posts' => $posts,

      ]);
    
    }
}
