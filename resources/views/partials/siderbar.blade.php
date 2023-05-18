<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/homeadmin" class="brand-link">
        <!-- <img src="/public/adminminstore/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <img src="{{ asset('/adminminstore/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminMinStore</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!-- <img src="/public/adminminstore/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
                <img src="{{ asset('/adminminstore/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
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
                @can('category-list')
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Danh mục sản phẩm
                        </p>
                    </a>
                </li>
                @endcan

                @can('menu-list')
                <li class="nav-item">
                    <a href="{{ route('menus.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-bars"></i>
                        <p>
                            Menus
                        </p>
                    </a>
                </li>
                @endcan

                @can('product-list')
                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Sản phẩm
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                @endcan

                @can('slider-list')
                <li class="nav-item">
                    <a href="{{ route('slider.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-film"></i>
                        <p>
                            Slider
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                @endcan

                @can('setting-list')
                <li class="nav-item">
                    <a href="{{ route('setting.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Cài đặt
                        </p>
                    </a>
                </li>
                @endcan

                @can('user-list')
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Danh sách nhân viên
                        </p>
                    </a>
                </li>
                @endcan

                @can('role-list')
                <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Phân quyền vai trò
                        </p>
                    </a>
                </li>
                @endcan

                @can('permission-list')
                <li class="nav-item">
                    <a href="{{ route('permissions.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-hand-holding"></i>
                        <p>
                            Tạo dữ liệu bảng phân quyền
                        </p>
                    </a>
                </li>
                @endcan

                <li class="nav-item">
                    <a href="{{ route('customer.show') }}" class="nav-link">
                        <i class="nav-icon fa fa-user-friends"></i>
                        <p>
                            Khách hàng
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>