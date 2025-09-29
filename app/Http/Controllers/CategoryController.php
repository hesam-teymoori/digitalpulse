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

    public function create()
    {
        return view('category.create');
    }
    
    public function store()
    {
      $category = new Category();

      $category->name  =request('name');
      $category->slug  =request('slug');

      $category->save();
   
        return redirect('/')->with('mssg', 'دسته‌بندی با موفقیت ایجاد شد!');
    }

    public function edit($id)
    {
      $category = Category::findOrFail($id);

      return view('category.edit', [
        'category' => $category
      ]);
    }

    public function update(Request $request, $id)
    {
      $category = Category::findOrFail($id);

      $category->name =$request->name;
      $category->slug =$request->slug;

      $category->save();

      return redirect('/')->with('mssg', 'دسته بندی با موفقیت ویرایش شد' );
    } 

    public function destroy($id)
    {
         $category = Category::findOrFail($id);
 
         $category->delete();

          return redirect('/')->with('success', 'دسته‌بندی با موفقیت حذف شد.');
    }    

}
