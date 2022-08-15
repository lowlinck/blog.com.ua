<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('main.index')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LowLinck</span>
    </a>
    <div class="sidebar">
        <ul class=" pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('main.index')}}" class="nav-link">
                    <i class="fa-solid fa-house-user"></i>
                    <p>Главная</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.like.index')}}" class="nav-link">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <p>Понравившеся посты</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.comment.index')}}" class="nav-link">
                    <i class="fa-solid fa-comment"></i>
                    <p>Коментарии</p>
                </a>
            </li>

        </ul>
    </div>
</aside>
