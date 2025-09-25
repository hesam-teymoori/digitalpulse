@extends('layouts.layout')

@section('content')


    <a href="{{ route('admin.posts.create') }}">ساخت پست</a>
  
    <h1>دسته‌بندی‌ها</h1>

            <ul>
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('admin.categories.show', $category->id) }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
  

      @if(session('mssg'))
    <div class="alert alert-success">
        {{ session('mssg') }}
    </div>
@endif






@endsection