@extends('layouts.layout')

@section('content')
<div  class="container-fluid my-4">
  <!-- 🖥️ Desktop: 3x2 grid -->
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-none d-md-flex">
   @foreach ($posts->take(6) as $post)
  <div class="col">
    <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-hover"
         style="background-image: url('{{ asset('storage/'.$post->image) }}');
          background-size: cover;
           background-position: center;">
      <div class="d-flex flex-column h-100 p-4 pb-3 text-white text-shadow-1 bg-dark bg-opacity-25">
        <h3 class="mt-auto mb-3 display-6 lh-1 fw-bold fs-3">
            {{ $post->title }}
        </h3> 
        <ul class="d-flex list-unstyled mt-auto small justify-content-start">
          <li class=" d-flex align-items-center ms-3">
                 <span class="ms-2">{{ $post->author }}</span>
          </li>
          <li class="d-flex align-items-center ms-3">
            <i class="bi bi-calendar3 me-1"></i>
            <small>{{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y') }}</small>
          </li>
        </ul>
      </div>
    </div>
    </a>
  </div>
  @endforeach
</div>

<!-- Mobile: Horizontal scroll -->
  <div class="d-md-none">
    <div class="horizontal-scroll">
      @foreach ($posts->take(6) as $post)
      <div class="scroll-item">
        <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-hover"
              style="background-image: url('{{ asset('storage/'.$post->image) }}');
                    background-size: cover;
                    background-position: center;">
            <div class="d-flex flex-column h-100 p-4 pb-3 text-white bg-dark bg-opacity-25">
              <h3 class="mt-auto mb-3 display-6 lh-1 fw-bold fs-5">{{ $post->title }}</h3>
              <ul class="d-flex list-unstyled mt-auto small justify-content-start">
                <li class="d-flex align-items-center ms-3">
                  <span class="ms-2">{{ $post->author }}</span>
                </li>
                <li class="d-flex align-items-center ms-3">
                  <i class="bi bi-calendar3 me-1"></i>
                  <small>{{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y') }}</small>
                </li>
              </ul>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>



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
