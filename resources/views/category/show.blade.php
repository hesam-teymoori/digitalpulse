@extends('layouts.layout')

@section('content')
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 mt-3">
      <li class="breadcrumb-item">
        <a href="/">
          <i class="bi bi-house-door-fill text-primary"></i>
            <span class="visually-hidden">خانه</span>
        </a>
      </li>
      <li class="breadcrumb-item"></li>
      @if(isset($category))
        <li class="breadcrumb-item active" aria-current="page">
          <a href="{{ route('categories.show', $category->id) }}">
            {{ $category->name }}
          </a>
        </li>
      @endif
      @if(isset($post))
        <li class="breadcrumb-item active" aria-current="page">
          {{ $post->title }}
        </li>
      @endif
    </ol>
  </nav>
  <!-- Category Header -->
  <div class="d-flex align-items-center justify-content-start mb-3">
    <h1 class="me-4">{{ $category->name }}</h1>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle me-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          تغییرات
        </button>
        <ul class="dropdown-menu text-end">
          <li>
            <a href="{{ route('categories.edit', $category->id) }}" class="dropdown-item">
              ویرایش دسته‌بندی
            </a>
          </li>
          <li>
            <button type="submit" class="dropdown-item text-danger p-2 m-0 border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#deleteModal">
              حذف
            </button>
          </li>
        </ul>
      </div>
  </div>
   <!-- Modal تایید حذف -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ms-2" id="deleteModalLabel">تایید حذف</h5>
        </div>
        <div class="modal-body">
          آیا از حذف این دسته‌بندی مطمئن هستید؟
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
          <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
           <button type="submit" class="btn btn-danger">حذف</button>
          </form>
       </div>
     </div>
   </div>
 </div>

  <!-- Posts Section -->
  <div>
    @if($posts->count())
      <div class="container py-5">
        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 d-none d-md-flex">
          @foreach($posts as $post)
            <div class="col">
              <div class="card h-100 shadow-sm rounded-4 shadow-lg overflow-hidden">
                <a href="{{ route('posts.show', $post->id) }}">
                  <img
                    src="{{ asset('storage/'.$post->image) }}"
                    alt="{{ $post->title }}"
                    class="card-img-top fixed-image"
                  >
                </a>

                <div class="card-body">
                  @if($post->category)
                    <span class="category-label mb-2">
                     {{ $post->category->name }}
                    </span>
                  @endif

                  <h5 class="card-title text-primary">
                    {{ $post->title }}
                  </h5>

                  <p class="card-text text-muted">
                   {{ \Illuminate\Support\Str::limit($post->excerpt, 150, '...') }}
                  </p>
                </div>

                <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between align-items-center">
                  <small class="text-muted">{{ $post->author }}</small>
                    <small class="text-muted">
                      {{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y') }}
                    </small>
                </div>

                <div class="card-footer bg-transparent border-top-0">
                  <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary w-100">
                    بیشتر بخوانید
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <!-- Posts Section:Mobile -->
      <div class="row d-md-none">
  @foreach ($posts as $post)
     <div class="col-12 mb-3 position-relative mt-5">
       <div class="d-flex align-items-center border-bottom pb-4">
         <img src="{{ asset('storage/'.$post->image)}}" alt="{{ $post->title }}" class="flex-shrink-0 rounded-3 position-absolute top-0 start-0  ms-4" style="width: 100px; height: 80px; object-fit: cover;">
         <div class="ms-3">
           <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">
           <h6 class="mb-1 text-primary-emphasis mt-3 me-2" style="font-size: 0.9rem;">{{ $post->title }}</h6>
           </a>
           <small class="text-muted d-block mt-4 me-2">{{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y') }}</small>
         </div>
       </div>
      </div>
  @endforeach
</div>
    <!-- Paging button -->
    <div class="d-flex justify-content-center mt-4">
    {{ $posts->links('pagination::bootstrap-4') }}
    </div>
    <!-- page no posts -->
    @else
    <div class="container text-center mt-5">
      <img src="{{ asset('images/no posts.png') }}" class="img-fluid " alt="تصویر شما"
      width="500" height="500">
      <p class="text-secondary mb-3 fs-5">هیچ پستی در این دسته وجود ندارد</p>
    </div>
    @endif
  </div>
@endsection