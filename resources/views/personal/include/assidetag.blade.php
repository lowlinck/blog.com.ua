<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('main.index')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LowLinck</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class=" pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.tag.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>

                    <p>Category</p>
                </a>
            </li>
        </ul>

    </div>

    <!-- /.sidebar -->
</aside>
