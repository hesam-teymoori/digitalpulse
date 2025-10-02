@extends('layouts.layout')

@section('content')



@foreach($categories as $category)
    <h2>{{ $category->name }}</h2>

    @if($category->posts->count())
        <ul>
            @foreach($category->posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                    <p>{{ Str::limit($post->excerpt, 100) }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>هیچ پستی در این دسته وجود ندارد.</p>
    @endif

    <a href="{{ route('categories.show', $category->id) }}">مشاهده همه پست‌های {{ $category->name }}</a>
@endforeach

     @if(session('mssg'))
    <div>
        {{ session('mssg') }}
    </div>
    @endif
     
    @if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif
    




@endsection    
