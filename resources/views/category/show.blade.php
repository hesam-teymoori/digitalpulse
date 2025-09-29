@extends('layouts.layout')

@section('content')

   <div>
<h1>دسته‌بندی: {{ $category->name }}</h1>

@if($posts->count())
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <p>{{ Str::limit($post->excerpt, 100) }}</p>
            </li>
        @endforeach
    </ul>
      
    {{ $posts->links() }}
@else
    <p>هیچ پستی در این دسته وجود ندارد.</p>
@endif
       
    <a href="{{ route('categories.edit', $category->id) }}">ویرایش دسته بندی</a>


    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" >
      @csrf
      @method('DELETE')
      <button type="submit" >حذف</button>
    </form>
   </div>











@endsection