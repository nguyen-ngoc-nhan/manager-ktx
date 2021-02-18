@extends('templates.admin.master')
@section('main-content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
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
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Đăng ký phòng</h3>
                        <form method="GET">
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2 choose" id="zone" name="zone">
                                            <option value="">Chọn khu</option>
                                            @foreach($itemZone as $itemZone1)
                                                @php
                                                    $id_zone = $itemZone1->id_zone;
                                                    $name_zone = $itemZone1->name_zone;
                                                @endphp
                                                <option value="{{$id_zone}}">{{$name_zone}}</option>
                                            @endforeach
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2 choose" id="number_people" name="number_people">
                                            <option value="">Số người</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
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
                        @if(Auth::check())
                            @php
                                $user =Auth::user();
                                $id_user = $user->id_user;
                            @endphp
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>Tên phòng</th>
                                            <th>Khu</th>
                                            <th>Số người</th>
                                            <th>Trạng thái</th>
                                            <th>Tiền phòng/3 tháng</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($items as $itemRoom)
                                        @php
                                            $id_room = $itemRoom->id_room;
                                            $name_room = $itemRoom->name_room;
                                            $id_zone = $itemRoom->id_zone;
                                            $name_zone = $itemRoom->name_zone;
                                            $number_people = $itemRoom->number_people;
                                            $status = $itemRoom->status;
                                            
                                        @endphp
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>{{$name_room}}</td>
                                            <td>
                                                <span>{{$name_zone}}</span>
                                            </td>
                                            <td class="desc">{{$number_people}}</td>
                                            <td>
                                                @if($number_people == 5)
                                                    <span style="color: red">Full slot</span>
                                                @else
                                                    <span class="status--process">Còn slot</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($number_people == 5)
                                                    <span class="status--process">306.000đ</span>
                                                @elseif($number_people == 4)
                                                    <span class="status--process">382.500đ</span>
                                                @elseif($number_people == 3)
                                                    <span class="status--process">510.000đ</span>
                                                @elseif($number_people == 2)
                                                    <span class="status--process">610.000đ</span>
                                                @elseif($number_people == 1)
                                                    <span class="status--process">765.000đ</span>
                                                @elseif($number_people == 0)
                                                    <span class="status--process">1.500.000đ</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <form action="{{route('admin.dangky.phong',['id'=>$id_room,'id_user_infor'=>$id_user])}}" method="POST">
                                                    @csrf
                                                        <input type="hidden" name="id_user" value="{{$id_user}}">
                                                        <input type="hidden" name="id_room" value="{{$id_room}}">
                                                        <input type="hidden" name="name_room" value="{{$name_room}}">
                                                        <input type="hidden" name="status_book_room" value="1">
                                                        <input type="hidden" name="number_people" value="{{$number_people}}">
                                                        @foreach($itemCheckDangKy as $itemsCheck)
                                                            @php
                                                                $id_room1 = $itemsCheck->id_room;
                                                                $id_user_book_room = $itemsCheck->id_user;
                                                                $status_check = $itemsCheck->status_check;
                                                            @endphp
                                                        @endforeach
                                                        @foreach($itemStatus as $itemStatus1)
                                                            @php
                                                                $id_user_information = $itemStatus1->id_user;
                                                                if($id_user == $id_user_information) {
                                                                    $status_book_room = $itemStatus1->status_book_room;
                                                                }
                                                            @endphp
                                                        @endforeach
                                                        @if($status_book_room == 0)
                                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="dangKy()">
                                                                <i class="zmdi zmdi-plus"></i>Đăng ký
                                                            </button>
                                                        @elseif($status_book_room == 1 && $id_room == $id_room1)
                                                            <button class="btn btn-secondary">
                                                                <i class="fa fa-spinner"></i>Đang xác nhận
                                                            </button>
                                                        @elseif($status_book_room == 2 && $id_room == $id_room1)
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-times"></i> Huỷ đăng ký
                                                            </button>
                                                        @endif
                                                    </form>
                                                    @if($number_people == 0 || $number_people == 1 || $number_people == 2)
                                                        <button style="margin-left: 20px" class="btn btn-warning">
                                                            Bao phòng
                                                        </button>
                                                    @elseif($number_people == 3 || $number_people == 4 || $number_people == 5)
                                                        <button id="baoPhong" onclick="baoPhong()" style="margin-left: 20px" class="btn btn-warning">
                                                            Bao phòng
                                                        </button>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                        <div class="user-data__footer row">
                            <div class="col-sm">
                            </div>
                            <div class="col-sm-auto">
                                {{$items->links()}}
                            </div>
                            <div class="col-sm">
                            </div>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script> 
        function baoPhong(){
            document.getElementById('baoPhong').html = alert('Phòng đã tối đa số người, Bạn không thể bao phòng!');
        }
        function dangKy(){
            document.getElementById('dangKy').html = alert("Bạn có chắc đăng ký phòng này không!");
        }
    </script>
@endsection