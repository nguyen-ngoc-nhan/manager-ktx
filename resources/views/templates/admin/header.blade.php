<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>KTX ĐHSP ĐÀ NẴNG</title>

    <!-- Fontfaces CSS-->
    <link href="{{$adminUrl}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{$adminUrl}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{$adminUrl}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{$adminUrl}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{$adminUrl}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{$adminUrl}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{$adminUrl}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{$adminUrl}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{$adminUrl}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{$adminUrl}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{$adminUrl}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{$adminUrl}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="{{$adminUrl}}/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{$adminUrl}}/css/theme.css" rel="stylesheet" media="all">
    <!-- Jquery JS-->
    <script src="{{$adminUrl}}/vendor/jquery-3.2.1.min.js"></script>
    <script src="{{$adminUrl}}/vendor/jquery2.0.3.min.js"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Tìm kiếm &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                    <div class="noti__item js-item-menu">
                                        <i style="font-size: 25px" class="fa fa-heart"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{$adminUrl}}/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">1</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    @php
                                        if(Auth::check()){
                                            $user =Auth::user();
                                            $username = $user->username;
                                            $email = $user->email;
                                        }
                                    @endphp
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{$adminUrl}}/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="">{{$username}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="{{route('admin.thongtin.sinhvien')}}">
                                                        <img src="{{$adminUrl}}/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="{{route('admin.thongtin.sinhvien')}}">{{$username}}</a>
                                                    </h5>
                                                    <span class="email">{{$email}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{route('admin.thongtin.sinhvien')}}">
                                                        <i class="zmdi zmdi-account"></i>Tài khoản</a>
                                                </div>
                                                {{-- <div class="account-dropdown__item">
                                                    <a href="">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div> --}}
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{route('auth.logout')}}">
                                                    <i class="zmdi zmdi-power"></i>Đăng xuất</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <!-- HEADER DESKTOP-->