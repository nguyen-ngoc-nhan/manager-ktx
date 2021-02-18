@extends('templates.admin.master')
@section('main-content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-sm-auto">
                    <h3 class="title-5 m-b-35-auto">Bảng giá lưu trú</h3>
                </div>
                <div class="row" style="margin-top:42px;margin-left:1px"> 
                    <div class="col-lg-6">
                        <!-- TOP CAMPAIGN-->
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">A. Phí nộp ban đầu</h3>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                        <tr>
                                            <td>1. phí đảm bảo tài sản</td>
                                            <td>100.000đ/người</td>
                                        </tr>
                                        <tr>
                                            <td>2. Phí làm thẻ từ lưu trú</td>
                                            <td>40.000đ/cái</td>
                                        </tr>
                                        <tr>
                                            <td>3. Phí hồ sơ</td>
                                            <td>10.000đ/bộ</td>
                                        </tr>
                                        <tr>
                                            <td>4. Phí ĐK tạm trú</td>
                                            <td>10.000đ/người</td>
                                        </tr>
                                        <tr>
                                            <td>5. Phí giấy decal dán cửa</td>
                                            <td>10.000đ/người</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 style="margin-top: 27px" class="title-3 m-b-30">B. Phí lưu trú</h3>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                        <tr>
                                            <td>1. Phí lưu trú thu theo quy định TP Đà Nẵng</td>
                                            <td>85.000đ/người/tháng</td>
                                        </tr>
                                        <tr>
                                            <td>2. Phí tiền nước</td>
                                            <td>25.000đ/người/tháng</td>
                                        </tr>
                                        <tr>
                                            <td>3. Phí sử dụng thang máy</td>
                                            <td>41.000đ/người/tháng</td>
                                        </tr>
                                        <tr>
                                            <td>4. Tiền điện: Tính theo chỉ số sử dụng và theo đơn giá quy định</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 style="margin-top: 27px" class="title-3 m-b-30">C. Phí giữ xe</h3>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                        <tr>
                                            <td>1. Xe máy</td>
                                            <td>15.000đ/tháng</td>
                                        </tr>
                                        <tr>
                                            <td>2. Xe đạp</td>
                                            <td>15.000đ/tháng</td>
                                        </tr>
                                        <tr>
                                            <td>3. Vé lẻ xe máy</td>
                                            <td>1.000đ/lượt</td>
                                        </tr>
                                        <tr>
                                            <td>4. Vé lẻ xe đạp</td>
                                            <td>1.000đ/lượt</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--  END TOP CAMPAIGN-->
                    </div>
                    <div class="col-lg-6">
                        <!-- TOP CAMPAIGN-->
                        <div class="top-campaign">
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <div>
                                        <img src="/storage/app/public/files/hanhlang.jpg" alt="">
                                        <p style="margin-left:75px; margin-top:10px">Hình 1. Một góc hành lang của ktx</p>
                                    </div>
                                    <div style="margin-top:40px">
                                        <img src="/storage/app/public/files/phong1.jpg" alt="">
                                        <p style="margin-left:75px; margin-top:10px">Hình 2. Một góc chụp của phòng ktx</p>
                                    </div>
                                    <div style="margin-top:40px;background-color:powderblue;border-radius:5px">
                                        <h3 style="margin-left:125px;margin-top:10px">Chi tiết liên hệ</h3>
                                        <p style="margin-left:110px;margin-top:10px">Khu Đông: (02363).955.579</p> 
                                        <p style="margin-left:125px;margin-top:10px">Khu Tây: (02363).772.579</p>
                                        <div style="width:5em;height:5em;border-radius:50%;background-color:white;margin-left:165px;margin-top:10px">
                                            <i style="margin:20px;font-size:40px" class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                </table>
                            </div>
                        </div>
                        <!--  END TOP CAMPAIGN-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection