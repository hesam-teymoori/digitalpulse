@extends('layouts.layout')

@section('content')


<h1>دسته‌بندی: {{ $category->name }}</h1>

@if($posts->count())
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a>
                <p>{{ Str::limit($post->excerpt, 100) }}</p>
            </li>
        @endforeach
    </ul>
<div>345</div>
    {{ $posts->links() }}
@else
    <p>هیچ پستی در این دسته وجود ندارد.</p>
@endif
  


