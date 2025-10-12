@extends('layouts.layout')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb p-3 mt-3">    
      <li class="breadcrumb-item">
           <a href="/">
             <i class="bi bi-house-door-fill text-primary"></i>
             <span class="visually-hidden">خانه</span>
           </a>
       </li>
      <li class="breadcrumb-item">
      </li>
       @if(isset($category))
            <li class="breadcrumb-item active" aria-current="page">
                <a href="{{ route('categories.show', $category->id) }}">
                    {{ $category->name }}
                </a>
            </li>
        @endif
        <li class="breadcrumb-item">
        </li>
        @if(isset($post))
            <li class="breadcrumb-item active" aria-current="page">
                {{ $post->title }}
            </li>
        @endif
   </ol>
</nav>
<div class="post-detail">
    <h1>{{ $post->title }}</h1>
    <p>نویسنده: {{ $post->author }}</p>
    
    

    @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="max-width: 100%;">
    @endif

    <div class="content">
        {!! nl2br(e($post->content)) !!}
    </div>

    <p>بازدید: {{ $post->views }}</p>

    <a href="{{ route('posts.edit', $post->id) }}">ویرایش پست</a>
  

  <form action="{{ route('posts.destroy', $post->id) }}" method="POST" >
      @csrf
      @method('DELETE')
      <button type="submit" >حذف</button>
  </form>       


</div>

@endsection