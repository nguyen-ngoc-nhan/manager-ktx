@extends('templates.admin.master')
@section('main-content')
    @php
        if(Auth::check()){
            $user =Auth::user();
            $id_user = $user->id_user;
        }
    @endphp
    @foreach($itemInformation as $item)
        @php
            $id_user_infor = $item->id_user;
            if($id_user == $id_user_infor){
                $status_book_room = $item->status_book_room;
            }
        @endphp
    @endforeach
    @if($status_book_room == 0 || $status_book_room == 1)
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <div id="closeShow">
                                <h3 class="title-3 m-b-30">
                                    <i class="zmdi zmdi-account-calendar"></i>Chưa có thông tin, vui lòng đăng ký phòng
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif($status_book_room == 2)
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <form method="GET">
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2 choose" id="month" name="month">
                                                <option value="">Tháng</option>
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                                <option value="4">05</option>
                                                <option value="4">06</option>
                                                <option value="4">07</option>
                                                <option value="4">08</option>
                                                <option value="4">09</option>
                                                <option value="4">10</option>
                                                <option value="4">11</option>
                                                <option value="4">12</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2 choose" id="year" name="year">
                                                <option value="">Năm</option>
                                                <option value="0">2019-2020</option>
                                                <option value="1">2020-2021</option>
                                                <option value="2">2021-2022</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <a href="">
                                            <button type="submit" class="au-btn-filter">
                                                <i class="zmdi zmdi-filter-list"></i>Lọc
                                            </button>
                                        </a>
                                    </div>
                                    
                                </div>
                            </form>
                            <!-- DATA TABLE-->
                            <div id="closeShow">
                            <h3 class="title-3 m-b-30">
                                <i class="zmdi zmdi-account-calendar"></i>Thông tin đăng ký phòng từ 23/12/2020 - 23/2/2021
                                <p id="demo"></p>
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
                                        {{-- <tbody>
                                            @foreach($itemInfor as $information)
                                            @php
                                                
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
                                        </tbody> --}}
                                    </table>
                                </div>
                            </form>
                            <div class="user-data__footer row">
                                <div class="col-sm">
                                </div>
                                <div class="col-sm-auto">
                                    {{-- {{$itemInfor->links()}} --}}
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
        <script>
            var d = new Date();
            var m = d.getMinutes();
            var start_m = m;
            var end_m = m+1;
            function timeReload(){
                if(start_m <= m < end_m){
                    document.getElementById("demo").innerHTML = m;
                    }else{
                    document.getElementById("demo").innerHTML = "Thời gian đăng ký phòng đã hết hạn";
                }
            }
            setTimeout("timeReload()",1000);
        </script>
    @endif
@endsection

