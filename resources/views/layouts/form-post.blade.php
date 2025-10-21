<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
  <!-- Protects the form against CSRF attacks -->
  @csrf
  @if($method === 'PUT')
    @method('PUT')
  @endif
   <!-- Title input field -->
  <div class="form-floating mb-3">
    <input
      type="text"
      class="form-control"
      id="title"
      name="title"
      placeholder="عنوان مقاله"
      value="{{ old('title', $post->title ?? '') }}"
      required
    >
    <label for="title" class="text-end" style="right: 0; left: auto; text-align: right;">
      عنوان مقاله
    </label>
  </div>
   <!-- Author name input field -->
  <div class="form-floating mb-3">
    <input
      type="text"
      class="form-control"
      id="author"
      name="author"
      placeholder="نام نویسنده"
      value="{{ old('author', $post->author ?? '') }}"
      required
    >
    <label for="author" class="text-end" style="right: 0; left: auto; text-align: right;">
      نویسنده
    </label>
  </div>
   <!-- Category selection dropdown -->
  <div class="form-floating mb-3">
    <select
      class="form-select"
      id="category_id"
      name="category_id"
      required
    >
      <option value="">انتخاب دسته‌بندی</option>
      @foreach($categories as $category)
        <option value="{{ $category->id }}"
          {{ old('category_id', $post->category_id ?? '') == $category->id ? 'selected' : '' }}>
          {{ $category->name }}
        </option>
      @endforeach
    </select>
    <label for="category_id" class="text-end" style="right: 0; left: auto; text-align: right;">
      دسته‌بندی
    </label>
  </div>
  <!-- Image upload field -->
  <div class="mb-3">
    <label for="image" class="form-label d-block text-end">تصویر مقاله</label>
      <input
        type="file"
        class="form-control"
        id="image"
        name="image"
      > 
  </div>
  <!-- Article excerpt textarea -->
  <div class="form-floating mb-3">
    <textarea
    class="form-control"
    placeholder="خلاصه مقاله را وارد کنید"
    id="excerpt"
    name="excerpt"
    style="height: 120px"
    >{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
    <label for="excerpt" class="text-end" style="right: 0; left: auto; text-align: right;">
      خلاصه مقاله
    </label>
  </div>
  <!-- Main article content textarea -->
  <div class="form-floating mb-3">
    <textarea
    class="form-control"
    placeholder="محتوای مقاله"
    id="content"
    name="content"
    style="height: 200px"
    required
    >{{ old('content', $post->content ?? '') }}</textarea>
    <label for="content" class="text-end" style="right: 0; left: auto; text-align: right;">
      محتوای مقاله
    </label>
  </div>
  <!-- Submit and cancel buttons -->
  <div class="d-flex justify-content-between mt-4">
    <button type="submit" class="btn btn-primary">
      ذخیره پست
    </button>
    <a href="{{ route('home') }}" class="btn btn-secondary">
      انصراف
    </a>
  </div>
              
</form>