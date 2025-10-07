 <!DOCTYPE html>
<html lang="fa" dir="rtl">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>DigitalPulse</title>
             <link rel="icon" type="image/png" href="{{ asset('images/digitalpulse_icon.png') }}">
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
             <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
             <link rel="stylesheet" href="{{ asset('css/style.css') }}">
             <link href="https://cdn.jsdelivr.net/npm/vazir-font@latest/dist/font-face.css" rel="stylesheet" type="text/css" />
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

            <!-- Styles -->
            <style>
                /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            </style>
        </head>
      <body class="vazir">
        <!-- header -->
    <div class="container-fluid p-0 ">
        <header class="pb-2"> 
           <div class="d-flex align-items-center custom-bg">
              <a href="/" class="d-flex align-items-center text-decoration-none mx-3 my-2">
                   <img src="{{ asset('images/logo.png') }}" alt="لوگو" width="150" height="80" class="ms-2">   
              </a>
               <!-- hamburger-menu -->
              <button class="btn btn-outline-secondary d-lg-none me-auto ms-3" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                   <img src="{{ asset('images/hamburger-menu.svg') }}" alt="منو" width="24" height="24">
              </button>
                 <!-- create -->
                 <div class="d-none d-lg-flex me-auto ms-3 ">
                     <a  href="{{ route('posts.create') }}" class="btn btn-primary ms-2">ساخت پست</a>
                     <a  href="{{ route('categories.create') }}" class="btn btn-secondary">ساخت دسته بندی</a>
                 </div>
            </div>
            <!-- navbar -->
            <nav class="custom-bg-nav d-none d-lg-block">
            <ul class="nav align-items-center">
                <li class="nav-item">
                   <a href="/" class="nav-link active btn btn-primary" aria-current="page">صفحه اصلی</a>
                </li>
                @foreach($categories as $category)
                  <li class="nav-item mx-3 my-2">
                    <a href="{{ route('categories.show', $category->id) }}" class="nav-link">
                        {{ $category->name }}
                    </a>
                  </li>
                @endforeach
            </ul>
            </nav>
           <!-- navbarmobile -->   
          <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
              <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="mobileMenuLabel">منو</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="بستن"></button>
               </div>
               <div class="offcanvas-body">
                  <ul class="navbar-nav mb-3">
                        <li class="nav-item">
                          <a href="/" class="nav-link">صفحه اصلی</a>
                        </li>
                       @foreach($categories as $category)
                      <li class="nav-item">
                          <a href="{{ route('categories.show', $category->id) }}" class="nav-link">{{ $category->name }}</a>
                      </li>
                       @endforeach
                   </ul>
                   <div class="d-grid gap-2">
                     <a href="{{ route('posts.create') }}" class="btn btn-primary w-100">ساخت پست</a>
                     <a href="{{ route('categories.create') }}" class="btn btn-secondary w-100">ساخت دسته بندی</a>
                   </div>
                </div>
            </div>
      </header>
  </div>

  <main class="min-vh-100">
  @yield('content')
  </main>

  <!-- footer -->
  <footer class="container-fluid bg-light border-top pt-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <!-- Logo column -->
        <div class="col d-flex flex-column align-items-start">
          <a href="/" class="mb-3">
            <img src="{{ asset('images/logo.png') }}" alt="لوگو" width="220" height="100">
          </a>
          <small class="text-muted">مأموریت ما، ساده‌تر کردن دنیای تکنولوژی برای همه</small>
        </div>
        <!-- Quick access column -->
        <div class="col mb-3">
          <h5 class="me-4">دسترسی سریع</h5>
          <hr>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-body-secondary">صفحه اصلی</a></li>
            @foreach($categories as $category)
              <li class="nav-item mb-2 ">
                <a href="{{ route('categories.show', $category->id) }}" class="nav-link p-0 text-body-secondary">
                  {{ $category->name }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
        <!-- Column about us -->
        <div class="col mb-3">
          <h5>درباره ما</h5>
          <hr>
          <p class="text-body-secondary mb-5">دیجیتال‌پالس یک وبلاگ تخصصی تکنولوژی است که تازه‌ترین خبرها، مقالات و تحلیل‌های دنیای فناوری را با زبانی ساده و کاربردی منتشر می‌کند. هدف ما همراهی شما در کشف دنیای دیجیتال و آگاهی از آخرین ترندهای تکنولوژی است.  </p>
        </div>
        <!-- Contact us column -->
        <div>
          <h5>ارتباط با ما</h5>
          <hr>
          <ul class="nav flex-column">
           <li class="nav-item mb-2">
             <a href="mailto:hesamt519@gmail.com" class="nav-link p-0 text-body-secondary">
                📧 hesamt519@gmail.com
             </a>
           </li>
            <li class="nav-item mb-2">
              <a href="tel:+982112345678" class="nav-link p-0 text-body-secondary">
                ☎️ 021-12345678
             </a>
           </li>
         </ul>
          <div class="d-flex gap-3 mt-2 me-5">
          <a href="#" class="text-body-secondary fs-4"><i class="bi bi-telegram"></i></a>
          <a href="#" class="text-body-secondary fs-4"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-body-secondary fs-4"><i class="bi bi-twitter"></i></a>
          </div>
       </div>
     </div>
    </div>
    <!-- Copyright section -->
    <div class="py-3 text-body-secondary vazir ">
      <small class="text-muted me-3">© 2025 دیجیتال‌پالس - همه حقوق محفوظ است</small>
    </div>
  </footer>      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>