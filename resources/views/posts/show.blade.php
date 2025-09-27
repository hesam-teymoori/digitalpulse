@extends('layouts.layout')

@section('content')
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