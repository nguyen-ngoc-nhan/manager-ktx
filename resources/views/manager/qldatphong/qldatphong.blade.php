@extends('templates.manager.master')
@section('main-content')
    @php
        if(Auth::check()){
            $user =Auth::user();
            $id_user = $user->id_user;
        }
    @endphp
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- USER DATA-->
                        <div class="user-data m-b-30">
                            <h3 class="title-3 m-b-30">
                                <i class="zmdi zmdi-account-calendar"></i>Quản lý đặt phòng</h3>
                            <div class="table-responsive table-data">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>ID</td>
                                            <td>Tên Phòng</td>
                                            <td>Tên sinh viên</td>
                                            <td>Số điện thoại</td>
                                            <td>Ngày đặt phòng</td>
                                            <td>Trạng thái</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($items as $itemBookRoom)
                                        @php
                                            $id_book_room = $itemBookRoom->id_book_room;
                                            $id_room = $itemBookRoom->id_room;
                                            $name_room = $itemBookRoom->name_room;
                                            $fullname = $itemBookRoom->fullname;
                                            $number_phone = $itemBookRoom->number_phone;
                                            $date = $itemBookRoom->create_at;
                                            $status_book_room = $itemBookRoom->status_book_room;
                                        @endphp
                                            <tr>
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$id_book_room}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$name_room}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$fullname}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$number_phone}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$date}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if($status_book_room == 1)
                                                        <form action="{{route('manager.xacnhan.dangky',['id_user_infor'=>$id_user])}}" method="POST">
                                                        @csrf
                                                            <input type="hidden" name="status_book_room" value="2">
                                                            <button class="btn btn-warning">
                                                                Xác nhận
                                                            </button>
                                                        </form>
                                                    @elseif($status_book_room == 2)
                                                        <i class="fa fa-check"></i><span style="color: darkgreen"> Đã xác nhận</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                        xoá
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="user-data__footer row">
                                <div class="col-sm">
                                </div>
                                <div class="col-sm-auto">
                                    {{-- {{$items->links()}} --}}
                                </div>
                                <div class="col-sm">
                                </div>
                            </div>
                        </div>
                        <!-- END USER DATA-->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $("#start_date").datepicker({
                prevText:"Tháng trước",
                nextText:"Tháng sau",
                dateFormat:"dd/mm/yy",
                dayNamesMin:["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
                duration: "slow"
            });
            $("#end_date").datepicker({
                prevText:"Tháng trước",
                nextText:"Tháng sau",
                dateFormat:"dd/mm/yy",
                dayNamesMin:["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
                duration: "slow"
            });
        });
    </script>
@endsection

