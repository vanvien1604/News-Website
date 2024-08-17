<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ 'Admin' }}</title>
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
      <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <!-- Styles -->
      @livewireStyles
   </head>
   <body class="font-sans antialiased">
      <x-banner />
      <div class="min-h-screen bg-gray-100">
         @livewire('navigation-menu')
         <!-- Page Heading -->
         @if (isset($header))
         <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
               {{ $header }}
            </div>
         </header>
         @endif
         <main style="position: relative; z-index: 1;">
            <!DOCTYPE html>
            <html lang="en">
               <head>
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <title>AdminLTE 3 | Dashboard 3</title>
                  <!-- Google Font: Source Sans Pro -->
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
                  <!-- Font Awesome Icons -->
                  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
                  <!-- IonIcons -->
                  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
                  <!-- Theme style -->
                  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
               </head>
               <!--
                  `body` tag options:
                  
                    Apply one or more of the following classes to to the body tag
                    to get the desired effect
                  
                    * sidebar-collapse
                    * sidebar-mini
                  -->
               <body class="hold-transition sidebar-mini">
                  <div class="wrapper">
                     <!-- Navbar -->
                     <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                           <li class="nav-item">
                              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                           </li>
                           <li class="nav-item d-none d-sm-inline-block">
                              <a href="index3.html" class="nav-link">Home</a>
                           </li>
                           <li class="nav-item d-none d-sm-inline-block">
                              <a href="#" class="nav-link">Contact</a>
                           </li>
                        </ul>
                        <!-- Right navbar links -->
                        <ul class="navbar-nav ml-auto">
                           <!-- Navbar Search -->
                           <li class="nav-item">
                              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                              <i class="fas fa-search"></i>
                              </a>
                              <div class="navbar-search-block">
                                 <form class="form-inline">
                                    <div class="input-group input-group-sm">
                                       <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                       <div class="input-group-append">
                                          <button class="btn btn-navbar" type="submit">
                                          <i class="fas fa-search"></i>
                                          </button>
                                          <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                          <i class="fas fa-times"></i>
                                          </button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </li>
                           <!-- Messages Dropdown Menu -->
                           <li class="nav-item dropdown">
                              <a class="nav-link" data-toggle="dropdown" href="#">
                              <i class="far fa-comments"></i>
                              <span class="badge badge-danger navbar-badge">3</span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                 <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    <div class="media">
                                       <img src="{{ asset('backend/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                       <div class="media-body">
                                          <h3 class="dropdown-item-title">
                                             Brad Diesel
                                             <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                          </h3>
                                          <p class="text-sm">Call me whenever you can...</p>
                                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                       </div>
                                    </div>
                                    <!-- Message End -->
                                 </a>
                                 <div class="dropdown-divider"></div>
                                 <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    <div class="media">
                                       <img src="{{ asset('backend/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                       <div class="media-body">
                                          <h3 class="dropdown-item-title">
                                             John Pierce
                                             <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                          </h3>
                                          <p class="text-sm">I got your message bro</p>
                                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                       </div>
                                    </div>
                                    <!-- Message End -->
                                 </a>
                                 <div class="dropdown-divider"></div>
                                 <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    <div class="media">
                                       <img src="{{ asset('backend/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                       <div class="media-body">
                                          <h3 class="dropdown-item-title">
                                             Nora Silvester
                                             <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                          </h3>
                                          <p class="text-sm">The subject goes here</p>
                                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                       </div>
                                    </div>
                                    <!-- Message End -->
                                 </a>
                                 <div class="dropdown-divider"></div>
                                 <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                              </div>
                           </li>
                           <!-- Notifications Dropdown Menu -->
                           <li class="nav-item dropdown">
                              <a class="nav-link" data-toggle="dropdown" href="#">
                              <i class="far fa-bell"></i>
                              <span class="badge badge-warning navbar-badge">15</span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                 <span class="dropdown-item dropdown-header">15 Notifications</span>
                                 <div class="dropdown-divider"></div>
                                 <a href="#" class="dropdown-item">
                                 <i class="fas fa-envelope mr-2"></i> 4 new messages
                                 <span class="float-right text-muted text-sm">3 mins</span>
                                 </a>
                                 <div class="dropdown-divider"></div>
                                 <a href="#" class="dropdown-item">
                                 <i class="fas fa-users mr-2"></i> 8 friend requests
                                 <span class="float-right text-muted text-sm">12 hours</span>
                                 </a>
                                 <div class="dropdown-divider"></div>
                                 <a href="#" class="dropdown-item">
                                 <i class="fas fa-file mr-2"></i> 3 new reports
                                 <span class="float-right text-muted text-sm">2 days</span>
                                 </a>
                                 <div class="dropdown-divider"></div>
                                 <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                              </div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                              <i class="fas fa-expand-arrows-alt"></i>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                              <i class="fas fa-th-large"></i>
                              </a>
                           </li>
                        </ul>
                     </nav>
                     <!-- /.navbar -->
                     @include('layouts.nav')
                     <!-- Content Wrapper. Contains page content -->
                     <div class="content-wrapper px-3">
                        <main class="py-4">
                           @yield('content')
                        </main>
                     </div>
                     <!-- /.content-wrapper -->
                     <!-- Control Sidebar -->
                     <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                     </aside>
                     <!-- /.control-sidebar -->
                     <!-- Main Footer -->
                     <footer class="main-footer">
                        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
                        All rights reserved.
                        <div class="float-right d-none d-sm-inline-block">
                           <b>Version</b> 3.2.0
                        </div>
                     </footer>
                  </div>
                  <!-- ./wrapper -->
                  <!-- REQUIRED SCRIPTS -->
                  <!-- jQuery -->
                  <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
                  <!-- Bootstrap -->
                  <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                  <!-- AdminLTE -->
                  <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
                  <!-- OPTIONAL SCRIPTS -->
                  <script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
                  <!-- AdminLTE for demo purposes -->
                  {{-- <script src="dist/js/demo.js"></script> --}}
                  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                  <script src="{{ asset('backend/dist/js/pages/dashboard3.js') }}"></script>
                  <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
                  <script>let table = new DataTable('#myTable');</script>
               </body>
            </html>
      </div>
      </main>
      @stack('modals')
      @livewireScripts
   </body>
</html>