  @php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return'active';
  }
  @endphp
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
      <span class="brand-text font-weight-light">Asia<b>Phone</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
            {{request()->user()->nama}}
            @else
              Silahkan Login
            @endif
          </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/produk')}}" class="nav-link {{checkRouteActive('admin/produk')}}">
              <i class="fab fa-shopify"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/kategori')}}" class="nav-link {{checkRouteActive('admin/kategori')}}">
              <i class="fas fa-list-ul"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link {{checkRouteActive('admin/user')}}">
              <i class="fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>