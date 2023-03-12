@php
$sidebar = config("sidebar.items");
@endphp
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-purple elevation-4">
  {{-- <aside class="main-sidebar sidebar-dark-primary elevation-4"> --}}
    <!-- Brand Logo -->
    <a href="#" class="brand-link navbar-purple">
      <img src="/admin/dist/img/logo-w.png" alt="Ranidoom Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text text-white">Flexy</span>
      {{-- <span class="brand-text font-weight-light">Flexy</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/admin/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @foreach($sidebar as $item)
          @include('admin.layouts.sidebars.nav-item',['item' => $item])
          @endforeach
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>