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
    <title>Đăng ký</title>

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

    <!-- Main CSS-->
    <link href="{{$adminUrl}}/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        {{-- start massage --}}
                        @if(Session()->has('msg'))
                            <div class="alert alert-success">
                                {{Session()->get('msg')}}
                            </div>
                        @elseif(Session()->has('error'))
                            <div class="alert alert-danger">
                                {{Session()->get('error')}}
                            </div>
                        @endif
                        {{-- end massage --}}
                        <div class="login-logo">
                            <h3 style="color: black">
                                ĐĂNG KÝ TÀI KHOẢN
                            </h3>
                        </div>
                        <div class="login-form">
                            <form action="{{route('auth.register')}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" oninput="input1()" id="password" name="password" placeholder="Password" required="required" maxlength="10">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree" required="required">Đồng ý với các điều khoảng và chính sách
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">ĐĂNG KÝ</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">đăng ký với facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">đăng ký với gmail</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Tài khoản đã đươc tạo?
                                    <a href="{{route('auth.login')}}">Đăng nhập</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function input1(){
            var password = document.getElementById('password').value;
            if( password.length < 6 ){
                document.getElementById('password').style.borderColor = 'red';
            }else{
                document.getElementById('password').style.borderColor = 'blue';
            }
        }
    </script>
    <!-- Jquery JS-->
    <script src="{{$adminUrl}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{$adminUrl}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{$adminUrl}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="{{$adminUrl}}/vendor/wow/wow.min.js"></script>
    <script src="{{$adminUrl}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{$adminUrl}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{$adminUrl}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{$adminUrl}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{$adminUrl}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{$adminUrl}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{$adminUrl}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{$adminUrl}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{$adminUrl}}/js/main.js"></script>

</body>

</html>
<!-- end document-->