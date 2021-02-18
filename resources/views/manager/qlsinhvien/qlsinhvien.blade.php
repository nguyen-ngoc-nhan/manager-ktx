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
                        <div id="closeShow">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-account-calendar"></i>Quản lý thông tin sinh viên
                        </h3>
                        <form action="">
                            <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TÊN</th>
                                            <th>SĐT</th>
                                            <th>TÌNH TRẠNG</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($itemInfor as $information)
                                        @php
                                            $id_user1 = $information->id_user;
                                            $id_infor = $information->id_infor;
                                            $fullname = $information->fullname;
                                            $ngaySinh = $information->date_of_brith;
                                            $sex = $information->sex;
                                            $masv = $information->masv;
                                            $khoa = $information->khoa;
                                            $number_phone = $information->number_phone;
                                            $cmnd = $information->cmnd;
                                            $id_school = $information->id_school;
                                            $id_tp = $information->id_tp;
                                            $id_qh = $information->id_qh;
                                            $id_xp = $information->id_xp;
                                            $status_book_room = $information->status_book_room;
                                        @endphp
                                        
                                        @foreach($itemInforTP as $inforTP)
                                            @php
                                                $id_tp1 = $inforTP->id_tp;
                                                $name_tp = $inforTP->name_tp;
                                            @endphp
                                        @endforeach
                                        <tr>
                                            <td>{{$id_infor}}</td>
                                            <td>{{$fullname}} ({{$sex}})</td>
                                            <td>{{$number_phone}}</td>
                                            @if($status_book_room == 0)
                                                <td style="color: red">Chưa chọn phòng</td>
                                            @elseif($status_book_room == 1)
                                                <td style="color: green">Đã chọn phòng</td>
                                            @endif
                                            <td>
                                                <a href="{{route('manager.chitiet',[$id_infor])}}">
                                                    <button type="button" class="btn btn-warning">
                                                        Xem chi tiết
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class="user-data__footer row">
                            <div class="col-sm">
                            </div>
                            <div class="col-sm-auto">
                                {{$itemInfor->links()}}
                            </div>
                            <div class="col-sm">    
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

