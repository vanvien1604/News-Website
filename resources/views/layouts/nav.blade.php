<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
       <!-- SidebarSearch Form -->
       <div class="form-inline mt-3">
          <div class="input-group" data-widget="sidebar-search">
             <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
             </div>
          </div>
       </div>
       <!-- Sidebar Menu -->
       <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
             <li class="nav-item {{ request()->routeIs('Categories*') ? 'menu-open' : ''}} ">
                <a href="#" class="nav-link">
                   <i class="fa-solid fa-layer-group pl-1 pr-2"></i>
                   <p>
                      Danh mục
                      <i class="right fas fa-angle-left"></i>
                   </p>
                </a>
                <ul class="nav nav-treeview">
                   <li class="nav-item">
                      <a href="{{ route('Categories.create') }}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Thêm mới</p>
                      </a>
                   </li>
                </ul>
                <ul class="nav nav-treeview">
                   <li class="nav-item">
                      <a href="{{ route('Categories.index') }}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Danh sách</p>
                      </a>
                   </li>
                </ul>
             </li>
             <li class="nav-item {{ request()->routeIs('Post*') ? 'menu-open' : ''}} ">
                <a href="#" class="nav-link">
                   <i class="fa-solid fa-table-columns pl-1 pr-2"></i>
                   <p>
                      Bài viết
                      <i class="right fas fa-angle-left"></i>
                   </p>
                </a>
                <ul class="nav nav-treeview">
                   <li class="nav-item">
                      <a href="{{ route('Post.create') }}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Thêm mới</p>
                      </a>
                   </li>
                </ul>
                <ul class="nav nav-treeview">
                   <li class="nav-item">
                      <a href="{{ route('Post.index') }}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Danh sách</p>
                      </a>
                   </li>
                </ul>
             </li>
          </ul>
       </nav>
       <!-- /.sidebar-menu --> 
    </div>
    <!-- /.sidebar -->
 </aside>