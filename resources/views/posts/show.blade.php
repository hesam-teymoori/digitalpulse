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
    <li class="breadcrumb-item">
    </li>
    @if(isset($category))
      <li class="breadcrumb-item active" aria-current="page">
        <a href="{{ route('categories.show', $category->id) }}">
          {{ $category->name }}
        </a>
      </li>
    @endif
    <li class="breadcrumb-item">
    </li>
    @if(isset($post))
      <li class="breadcrumb-item active" aria-current="page">
        {{ $post->title }}
      </li>
    @endif
  </ol>
</nav>
<!-- Desktop layout for post header (title, excerpt, author, date, views, image) -->     
<div class="d-flex d-none d-md-flex align-items-center">
  <div class="flex-grow-1">
    <h2 class=" fw-5 text-end me-5" style="line-height: 1.6; color: #16205b" >
      {{ $post->title }}
    </h2>
    <p class="me-5 mt-4" style=" color: #33353fff">{{ $post->excerpt }}</p>
    <p class="me-5 text-muted mb-0">نوشته شده توسط {{ $post->author }}</p>
    <p class="me-5 text-muted">{{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y') }}</p>
    <img src="{{ asset('images/veiw.png') }}" alt="بازدید" width="45" height="45" class="veiw-margin">
    <small class=" text-muted">بازدید ها:{{ $post->views }}</small>
  </div>
  <div style="flex: 0 0 650px;">
    <img
      src="{{ asset('storage/'.$post->image)}}"
      style="object-fit: cover; height: 430px; width: 650px ;"
      class=" rounded-4 ms-4"
      alt="{{ $post->title }}"
    > 
  </div>
</div>
<!-- Mobile layout for post header -->
<div class="d-block d-md-none">
  <div class="mb-3 mx-3">
    <img
      src="{{ asset('storage/'.$post->image)}}"
      style="object-fit: cover; width: 100%; height: 250px;"
      class="rounded-4"
      alt="{{ $post->title }}"
    > 
  </div>
  <div class="mx-3">
    <h2 class="fw-5 text-end" style="line-height: 1.4; color: #16205b">
      {{ $post->title }}
    </h2>
    <p class="mt-2" style="color: #33353fff">{{ $post->excerpt }}</p>
    <p class="text-muted mb-0">نوشته شده توسط {{ $post->author }}</p>
    <p class="text-muted">{{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y') }}</p>
    <div class="d-flex align-items-center mt-2">
      <img src="{{ asset('images/veiw.png') }}" alt="بازدید" width="30" height="30" class="me-2">
      <small class="text-muted">بازدید ها: {{ $post->views }}</small>
    </div>
  </div>
</div>

<!-- Main content area -->
<div class="d-flex">
  <div class=" col-md-7">
    <!-- Post body/content -->
    <div class="content content-margin" style=" color: #16205b ">
      {!! nl2br(e($post->content)) !!}
    </div>
    <!-- Edit & Delete buttons -->
    <div class="me-3 me-md-5 mt-3">
      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success mb-3">ویرایش پست</a>
      <button type="submit" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#deleteModal">حذف</button>
    </div>
    <!-- Delete confirmation modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title ms-2" id="deleteModalLabel">تایید حذف</h5>
          </div>
          <div class="modal-body">
            آیا از حذف این پست مطمئن هستید؟
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
  </div>
  <!-- Sidebar (Hot posts & Latest posts) for desktop -->
  <div class="d-none d-md-block">
    <!-- Hot posts section -->
    <h5 class="veiw-posts me-2" style=" color: #16205b">پربازدید ترین پست ها</h5>
    @foreach($hotPosts as $show =>  $post)
    <a href="{{ route('posts.show', $post->id) }}">
      <div class="d-flex mb-2">
        <img src="{{ asset('storage/'.$post->image)}}" alt="{{ $post->title }}"
        class="mt-3 rounded" style="width: 80px; height: 80px; object-fit:cover;">
        <div class="mt-3 me-3">
          <h6 style=" color: #006dc1">{{ $post->title }}</h6>
          <small class="text-muted">{{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y') }}</small>
        </div>
      </div>
    </a>
    @endforeach
    <!-- Latest posts section -->
    <div class="mb-5">
      <h5 class="me-2 mt-5" style=" color: #16205b">تازه ترین پست ها</h5>
      @foreach($latestPosts as $show => $post)
      <a href="{{ route('posts.show', $post->id) }}">
        <div class="d-flex mb-2">
          <img src="{{ asset('storage/'.$post->image)}}" alt="{{ $post->title }}"
          class="mt-3 rounded" style="width: 80px; height: 80px; object-fit:cover;">
          <div class="mt-3 me-3">
            <h6 style=" color: #006dc1">{{ $post->title }}</h6>
            <small class="text-muted">{{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y') }}</small>
         </div>
        </div>
      </a>
      @endforeach  
    </div>  
  </div>
</div>
<!-- Related posts section -->
<div class="me-3 me-md-5">
  <h5 style=" color: #16205b">مقالات و اخبار مرتبط</h5>
  @foreach($relatedPosts as $show => $post)
    <a href="{{ route('posts.show', $post->id) }}">
      <div class=" my-4">
        <p style=" color: #004b94 ">{{ $post->title }}</p>
      </div>
    </a>
  @endforeach
</div>
<!-- Back to top button -->
<button id="backToTopBtn" class="btn btn-primary rounded-circle" title="برو بالا">
  <i class="bi bi-arrow-up"></i>
</button>
@endsection