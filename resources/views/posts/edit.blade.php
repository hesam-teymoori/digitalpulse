  @extends('layouts.layout')

@section('content')


<div>
    <h1>Edit post</h1>
    <form action= "{{ route('posts.update' ,$post->id) }}"method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
         <label for="title">عنوان</label>
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>
        <br>
        <br>
        <label for="category_id">دسته‌بندی</label>
            <select name="category_id" id="category_id" required>
                <option value="">انتخاب دسته بندی</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option> 
                @endforeach    
            </select>
        <br>
        <br>
        <label for="author">نویسنده</label>
        <input type="text" name="author" id="author"  value="{{ old('author', $post->author) }}"  required>
          <br>
          <br>
        <label for="image" class="form-label">تصویر</label>
        <input type="file" name="image" id="image">
          <br>
          <br>
        <label for="excerpt" >خلاصه</label>
        <textarea name="excerpt" id="excerpt"  rows="3">{{ old('excerpt', $post->excerpt) }}</textarea>
          <br>
          <br>
         <label for="content" class="form-label">محتوا</label>
        <textarea name="content" id="content"  rows="6" required>{{ old('content', $post->content) }}</textarea>

          <br>
          <br>
          <button type="submit" class="btn btn-success">ذخیره پست</button>
          <a href="{{ route('home') }}" class="btn btn-secondary">انصراف</a>
    </form>     
</div>
      


@endsection