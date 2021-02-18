@extends('templates.manager.master')
@section('main-content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        @php
                            if(Auth::check()){
                                $user =Auth::user();
                                $id_user = $user->id_user;
                            }
                        @endphp
                        @foreach($itemInforDetail as $information1)
                            @php
                                $id_user1 = $information1->id_user;
                                $id_infor = $information1->id_infor;
                                $fullname = $information1->fullname;
                                $ngaySinh = $information1->date_of_brith;
                                $sex = $information1->sex;
                                $masv = $information1->masv;
                                $khoa = $information1->khoa;
                                $number_phone = $information1->number_phone;
                                $cmnd = $information1->cmnd;
                                $id_school = $information1->id_school;
                                $id_tp = $information1->id_tp;
                                $id_qh = $information1->id_qh;
                                $id_xp = $information1->id_xp;
                                $status = $information1->status;
                            @endphp
                        @endforeach
                        <div id="closeShow">
                            <h3 class="title-3 m-b-30">
                                <i class="zmdi zmdi-account-calendar"></i>Xem chi tiết thông tin
                            </h3>
                            <div class="table-responsive m-b-40">
                                <div class="col-lg-12">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">{{$fullname}}</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <tr>
                                                    <td>Ngày sinh</td>
                                                    <td>{{$ngaySinh}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Số điện thoại</td>
                                                    <td>{{$number_phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Số cmnd</td>
                                                    <td>{{$cmnd}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Thành phố đang sống</td>
                                                    @foreach($itemInforTP as $inforTP)
                                                        @php
                                                            $id_tp1 = $inforTP->id_tp;
                                                            $name_tp = $inforTP->name_tp;
                                                        @endphp
                                                    @endforeach
                                                    @if($id_tp == $id_tp1)
                                                        <td>{{$name_tp}}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Quận huyện đang sống</td>
                                                    @foreach($itemInforQH as $inforQH)
                                                        @php
                                                            $id_qh1 = $inforQH->id_qh;
                                                            $name_qh = $inforQH->name_qh;
                                                        @endphp
                                                    @if($id_qh == $id_qh1)
                                                        <td>{{$name_qh}}</td>
                                                    @endif
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td>Huyện xã đang sống</td>
                                                    @foreach($itemInforXP as $inforXP)
                                                        @php
                                                            $id_xp1 = $inforXP->id_xa;
                                                            $name_xp = $inforXP->name_xp;
                                                        @endphp
                                                    
                                                    @if($id_xp == $id_xp1)
                                                        <td>{{$name_xp}}</td>
                                                    @endif
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td>Trường</td>
                                                    @foreach($itemInforSchool as $inforSchool)
                                                        @php
                                                            $id_school1 = $inforSchool->id_school;
                                                            $name_school = $inforSchool->name_school;
                                                        @endphp
                                                    @if($id_school == $id_school1)
                                                        <td>{{$name_school}}</td>
                                                    @endif
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td>Khoa</td>
                                                    <td>{{$khoa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Mã sinh viên</td>
                                                    <td>{{$masv}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div style="float: right;margin-top:50px">
                                            <a href="{{route('manager.qlsinhvien')}}">
                                                <button type="button" class="btn btn-warning">
                                                    Quay lại
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--  END TOP CAMPAIGN-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

