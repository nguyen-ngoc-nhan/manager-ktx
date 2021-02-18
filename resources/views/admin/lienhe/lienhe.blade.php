@extends('templates.admin.master')
@section('main-content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <div class="table-responsive">
                            <h3 style="margin-left:250px">TRANG LIÊN HỆ - ĐÓNG GÓP Ý KIẾN</h3>
                            <div style="margin-top: 50px" class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="fullname">Họ và tên:*</label>
                                        <input type="text" class="form-control" id="fullname" placeholder="Họ và tên">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:*</label>
                                        <input type="email" class="form-control" id="email" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Khu ktx:*</label>
                                        <select class="form-control" id="khu ktx">
                                        <option>Khu đông</option>
                                        <option>Khu tây</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sđt">Số điện thoại:*</label>
                                        <input type="text" class="form-control" id="sđt" placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Nội dung</label>
                                        <textarea class="form-control" id="noidung" rows="5" placeholder="Xin mời nhập vào đây"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  END TOP CAMPAIGN-->
                </div>
            </div>
        </div>
    </div>
@endsection