 @extends('layouts.layout')

@section('content')


<div>
  <h1>create a new post</h1>
  <form action= "{{ route('posts.store') }}"method="POST"  enctype="multipart/form-data">
        @csrf
        
         <label for="title">عنوان</label>
        <input type="text" name="title" id="title" required>
        <br>
        <br>
        <label for="category_id">دسته‌بندی</label>
            <select name="category_id" id="category_id" required>
                <option value=""></option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option> 
                @endforeach    
            </select>
        <br>
        <br>
        <label for="author">نویسنده</label>
        <input type="text" name="author" id="author" required>
          <br>
          <br>
        <label for="image" class="form-label">تصویر</label>
        <input type="file" name="image" id="image">
          <br>
          <br>
        <label for="excerpt" >خلاصه</label>
        <textarea name="excerpt" id="excerpt"  rows="3"></textarea>
          <br>
          <br>
         <label for="content" class="form-label">محتوا</label>
        <textarea name="content" id="content"  rows="6" required></textarea>

          <br>
          <br>
          <button type="submit" class="btn btn-success">ذخیره پست</button>
        <a href="{{ route('home') }}" class="btn btn-secondary">انصراف</a>





    </form>
</div>


      


@endsection