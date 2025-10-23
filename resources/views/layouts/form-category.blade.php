<form action="{{ $action }}" method="POST">
    <!-- Protects the form against Cross-Site Request Forgery (CSRF) attacks -->
    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif
    <!-- Category name input field -->
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="عنوان دسته بندی"
            value="{{ old('name', $category->name ?? '') }}"
            required
        >
        <label for="name" class="text-end" style="right: 0; left: auto; text-align: right;">
            عنوان دسته بندی
        </label>
    </div>
    <!-- Slug input field (used for URL-friendly name) -->
    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control"
            id="slug"
            name="slug"
            placeholder="slug"
            value="{{ old('slug', $category->slug ?? '') }}"
            required
        >
        <label for="slug" class="text-end" style="right: 0; left: auto; text-align: right;">
            slug
        </label>
    </div> 
    <!-- Submit and cancel buttons --> 
    <div class="d-flex justify-content-between mt-4">
        <button type="submit" class="btn btn-primary">
            ذخیره دسته‌بندی
        </button>
        <a href="{{ route('home') }}" class="btn btn-secondary">
            انصراف
        </a>
    </div>
              
</form>
