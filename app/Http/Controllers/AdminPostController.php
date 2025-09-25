<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
class AdminPostController extends Controller
{
    
  public function show($id){

        $post = Post::findOrFail($id);

        return view('admin.posts.show', ["post" => $post]);
    }

   public function create(){
        $categories = Category::all();

        return view('admin.posts.create', [
          'categories' => $categories
        ]);
    }  

  public function store(){

     $post = new Post();
    
    $post->title       = request('title');
    $post->category_id = request('category_id');
    $post->author      = request('author');
    $post->excerpt     = request('excerpt');
    $post->content     = request('content');
      
    if (request()->hasFile('image')) {
        $post->image = request()->file('image')->store('posts', 'public');
    }

     $post->save();

     return redirect('/admin/dashboard')->with('mssg', 'پست شما با موفقیت ایجاد شد!');
  }
  
  public function edit($id)
  {
    $post = Post::findOrFail($id);

    $categories = Category::all();

    return view('admin.posts.edit', [
        'post' => $post,
        'categories' => $categories
    ]);
  }

  public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);

    $post->title       = $request->title;
    $post->category_id = $request->category_id;
    $post->author      = $request->author;
    $post->excerpt     = $request->excerpt;
    $post->content     = $request->content;


    if ($request->hasFile('image')) {
    if ($post->image && \Storage::disk('public')->exists($post->image)) {
        \Storage::disk('public')->delete($post->image);
    }
    $post->image = $request->file('image')->store('posts', 'public');
}


    $post->save();

    return redirect('/admin/dashboard')->with('mssg', 'پست با موفقیت ویرایش شد!');
}
 

   public function destroy($id)
   {
       $post = Post::findOrFail($id);

        if ($post->image && \Storage::disk('public')->exists($post->image)) {
            \Storage::disk('public')->delete($post->image);
        }

       $post->delete(); 

       return redirect()->route('admin.dashboard')->with('mssg', 'پست با موفقیت حذف شد!');
   }


}
