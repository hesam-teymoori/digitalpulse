@extends('layouts.layout')

@section('content')

<div>
    <h1>ایجاد دسته‌بندی جدید</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <label for="name">نام دسته‌بندی</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        <br><br>

        <label for="slug">Slug دسته‌بندی</label>
        <input type="text" name="slug" id="slug" value="{{ old('slug') }}" required>
        <br><br>

        <button type="submit" >ذخیره دسته‌بندی</button>
        <a href="{{ route('home') }}" >انصراف</a>
    </form>
</div>




@endsection