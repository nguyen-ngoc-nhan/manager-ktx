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
                    <li class="{{'/' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('admin.trangchu')}}">
                        <i class="fas fa-tachometer-alt"></i>Trang chủ
                        </a>
                    </li>
                    <li class="{{'thong-tin-sinh-vien' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('admin.thongtin.sinhvien')}}">
                            <i class="fas fa-chart-bar"></i>Thông tin sinh viên</a>
                    </li>
                    <li class="{{'dang-ky-phong' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('admin.dangkyphong')}}">
                            <i class="far fa-edit"></i>Đăng ký phòng
                        </a>
                    </li>
                    <li class="{{'thong-tin-phong-da-dang-ky' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('admin.thongtinphong.dk')}}">
                            <i class="fas fa-table"></i>Xem thông tin phòng đăng ký
                        </a>
                    </li>
                    <li class="{{'#' == request()->path() ? 'active has-sub' : ''}}">
                        <a class="js-arrow" href="#">
                            <i class="fa fa-tags"></i>Bảng giá lệ phí
                        </a>
                        <ul style="margin-left: 10px" class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li class="{{'tong-hop-bang-gia-phi' == request()->path() ? 'active has-sub' : ''}}">
                                <a href="{{route('admin.bang.gia')}}">
                                    Tổng hợp phí ktx
                                </a>
                            </li>
                            <li class="{{'huong-dan-va-thanh-toan-online' == request()->path() ? 'active has-sub' : ''}}">
                                <a href="{{route('admin.thanhtoan.online')}}">
                                    Nộp phí online
                                </a>
                            </li>
                            <li class="{{'huong-dan-thanh-toan-tai-khoan-ngan-hang' == request()->path() ? 'active has-sub' : ''}}">
                                <a href="{{route('admin.thanhtoan.tknh')}}">
                                    Nộp phí qua tài khoản ngân hàng
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{'lien-he' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('admin.lien.he')}}">
                            <i class="fa fa-phone"></i>Liên hệ
                        </a>
                    </li>
                    <li class="{{'ban-do' == request()->path() ? 'active has-sub' : ''}}">
                        <a href="{{route('admin.bando')}}">
                            <i class="fas fa-map-marker-alt"></i>Maps
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
   
<!-- END MENU SIDEBAR-->