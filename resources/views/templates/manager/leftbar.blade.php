<!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a style="color:black" href="{{route('admin.trangchu')}}">
                <i class="fas fa-home"></i> KTX ĐHSP ĐÀ NẴNG
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="{{'manager/trang-chu' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('manager.trangchu')}}">
                        <i class="fas fa-tachometer-alt"></i>Trang chủ
                    </a>
                    </li>
                    <li class="{{'manager/quan-ly-phong' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('manager.qlphong')}}">
                            <i class="far fa-calendar-check"></i>Quản lý phòng
                        </a>
                    </li>
                    <li class="{{'manager/quan-ly-dat-phong' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('manager.qldatphong')}}">
                            <i class="fas fa-check"></i>Quản lý đặt phòng
                        </a>
                    </li>
                     <li class="{{'manager/quan-ly-sinh-vien' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('manager.qlsinhvien')}}">
                            <i class="fas fa-users"></i>Quản lý sinh viên
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="fa fa-table"></i>Quản lý tin tức
                        </a>
                    </li>
                    <li class="{{'manager/quan-ly-tai-khoan' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('manager.qltaikhoan')}}">
                            <i class="fas fa-user-circle"></i></i>Quản lý tài khoản
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="fas fa-sitemap"></i>Quản lý thống kê
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
   
<!-- END MENU SIDEBAR-->