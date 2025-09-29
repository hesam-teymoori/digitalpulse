@extends('layouts.layout')

@section('content')

<h1>ویرایش دسته‌بندی</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">نام دسته‌بندی</label>
    <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" required>
     <br>
     <br>
     <label for="slug">دسته بندی slug</label>
    <input type="text" name="slug" id="slug" value="{{ old('slug', $category->slug) }}" required>
      <br>
      <br>
    <button type="submit">ذخیره تغییرات</button>
    <a href="{{ route('home') }}">انصراف</a>
</form>








@endsection