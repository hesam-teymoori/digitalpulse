<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.dashboard', [
            'categories' => $categories,
        ]);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts()->latest()->paginate(10);

        return view('admin.categories.show', [
            'category' => $category,
            'posts' => $posts,
        ]);
    }    
}
