@extends('templates.manager.master')
@section('main-content')
    <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">overview</h2>
                                <button class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>add item</button>
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-25">
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c1">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-account-o"></i>
                                        </div>
                                        <div class="text">
                                            <h2>1000</h2>
                                            <span>Sinh viên đang ở tại ký túc xá</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c2">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </div>
                                        <div class="text">
                                            <h2>388,688</h2>
                                            <span>items solid</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c3">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-calendar-note"></i>
                                        </div>
                                        <div class="text">
                                            <h2>1,086</h2>
                                            <span>this week</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c4">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-money"></i>
                                        </div>
                                        <div class="text">
                                            <h2>$1,060,386</h2>
                                            <span>total earnings</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart4"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                <div class="au-card-title" style="background-image:url('{{$adminUrl}}/images/ktx1.jpg');">
                                    <div class="bg-overlay bg-overlay--blue"></div>
                                    <h3><i class="zmdi zmdi-account-calendar"></i>Thông báo</h3>
                                </div>
                                <div class="au-task js-list-load">
                                    <div class="au-task__title">
                                        <p>Bạn có 3 thông báo mới</p>
                                    </div>
                                    <div class="au-task-list js-scrollbar3">
                                        <div class="au-task__item au-task__item--danger">
                                            <div class="au-task__item-inner">
                                                <h5 class="task">
                                                    <a href="#">Meeting about plan for Admin Template 2018</a>
                                                </h5>
                                                <span class="time">10:00 AM</span>
                                            </div>
                                        </div>
                                        <div class="au-task__item au-task__item--warning">
                                            <div class="au-task__item-inner">
                                                <h5 class="task">
                                                    <a href="#">Create new task for Dashboard</a>
                                                </h5>
                                                <span class="time">11:00 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-task__footer">
                                        <button class="au-btn au-btn-load js-load-btn">load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                <div class="au-card-title" style="background-image:url('{{$adminUrl}}/images/icon/ktx.png');">
                                    <div class="bg-overlay bg-overlay--blue"></div>
                                    <h3>
                                        <i class="zmdi zmdi-comment-text"></i>Tin tức quan trọng</h3>
                                    {{-- <button class="au-btn-plus">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button> --}}
                                </div>
                                <div class="au-inbox-wrap">
                                    <div class="au-message">
                                        <div class="au-message__noti">
                                            <p>Bạn có
                                                <span>{{$count}}</span> tin mới
                                            </p>
                                        </div>
                                        @foreach($items as $item)
                                        @php
                                            $detail = $item->detail;
                                            $date = $item->create_at;
                                            $urlPic = '/storage/app/public/files/'.$item->picture;
                                        @endphp
                                        <div class="au-message-list">
                                            <div class="au-message__item">
                                                <div class="au-message__item-inner">
                                                    <div class="au-message__item-text">
                                                        <div class="avatar-wrap online">
                                                            <div class="avatar">
                                                                <img src="{{$adminUrl}}/images/icon/ktx.png" alt="Michelle Sims">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <h5 class="name">KTX ĐẠI HỌC SƯ PHẠM ĐÀ NẴNG</h5>
                                                            <span style="font-size:12px">{{$date}}. <i style="font-size:12px" class="fa fa-globe"></i></span>
                                                        </div>
                                                        <div style="margin-top:20px;margin-left:10px">
                                                            <div class="">
                                                                <div>{{$detail}}</div>
                                                            </div>
                                                            <div class="recei-mess__inner">
                                                                <div><img src="{{$adminUrl}}/images/ktx1.jpg" alt="John Smith"></div>
                                                            </div>
                                                        </div>
                                                        <div style="margin-top:20px;margin-left:7px">
                                                            <form class="au-form-icon">
                                                                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Bình luận bài viết">
                                                                <button type="submit" class="au-input-icon">
                                                                    <i class="fas fa-paper-plane"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="au-message__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>
</div>
@endsection

