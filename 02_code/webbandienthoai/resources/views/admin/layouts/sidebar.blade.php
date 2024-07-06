<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      @if(!Auth::guard('admin')->user()->avatar || !Storage::exists(Auth::guard('admin')->user()->avatar))

      <div class="image">
      <img src="{{asset('theme/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="Image">
      </div>
    @else
      <div class="image">
      <img src="{{asset('storage/' . Auth::guard('admin')->user()->avatar) }}" class="img-circle elevation-2"
        alt="Image">
      </div>
    @endif
      <div class="info">
        <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
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
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Admin quản lý
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.admin.index') }}"
                class="nav-link {{ request()->is(['admin/admin*']) ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.user.index') }}"
                class="nav-link {{ request()->is(['admin/user*']) ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý user</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.category.index') }}"
                class="nav-link {{ request()->is(['admin/category*']) ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý danh mục</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.product.index') }}"
                class="nav-link {{ request()->is(['admin/product*']) ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.bill.index') }}"
                class="nav-link {{ request()->is(['admin/bill*']) ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý đơn hàng</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('admin.comment.index') }}"
                class="nav-link {{ request()->is(['admin/comment*']) ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý đánh giá</p>
              </a>
            </li>

          </ul>
    </nav>
  </div>
</aside>