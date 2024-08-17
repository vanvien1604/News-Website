<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Trang chủ</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Vendor CSS Files -->
      <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/vendor/aos/aos.css" rel="stylesheet') }}">
      <!-- Template Main CSS Files -->
      <link href="{{ asset('frontend/css/variables.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="header d-flex align-items-center fixed-top">
         <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ route('Homepages') }}" class="logo d-flex align-items-center">
               <h1>Vnexpress</h1>
            </a>
            <nav id="navbar" class="navbar">
               <ul>
                  <li><a href="{{ route('Homepages') }}">Trang Chủ</a></li>
                  <li class="dropdown">
                     <a href="#"><span>Danh Mục</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>
                        @foreach ($Categories as $key => $showdm)
                        <li><a href="{{ route('Category',$showdm->id) }}">{{ $showdm->name }}</a></li>
                        @endforeach
                     </ul>
                  </li>
                  <li><a href="{{ route('About') }}">Giới Thiệu</a></li>
                  <li><a href="{{ route('Contact') }}">Liên Hệ</a></li>
               </ul>
            </nav>
            <!-- .navbar -->
            <div class="position-relative navbar" style="padding-left: 10px">
               @if ( !Auth::check() )
               <a href="{{ route('register') }}" class="mx-2">Đăng ký</a>
               <a href="{{ route('login') }}" class="mx-2" style="padding-left: 5px;">Đăng nhập</a>
               @else
               <li class="dropdown position-relative" style="display: contents;">
                  <i class="fa-solid fa-user"></i>
                  <a href="#" style="padding: 10px"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                     <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item mx-4">Đăng xuất</button>
                     </form>
                  </ul>
               </li>
               @endif
               <a href="#" class="mx-2 js-search-open" style="padding-left: 5px;"><span class="bi-search"></span></a>
               <i class="bi bi-list mobile-nav-toggle"></i>
               <!-- ======= Search Form ======= -->
               <div class="search-form-wrap js-search-form-wrap">
                  <form method="GET" action="{{ route('Homepages') }}" class="search-form">
                     <span class="icon bi-search"></span>
                     <input type="text" placeholder="Search" class="form-control" name="search">
                     {{-- <button type="submit" class="btn js-search-close"><span class="bi-x"></span></button> --}}
                  </form>
               </div>
               <!-- End Search Form -->
            </div>
         </div>
      </header>
      <!-- End Header -->