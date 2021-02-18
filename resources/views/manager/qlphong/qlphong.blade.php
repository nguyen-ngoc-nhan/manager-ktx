@extends('templates.manager.master')
@section('main-content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- USER DATA-->
                        <div class="user-data m-b-30">
                            <h3 class="title-3 m-b-30">
                                <i class="zmdi zmdi-account-calendar"></i>Quản lý phòng</h3>
                            <div class="filters m-b-45">
                                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                    <select class="js-select2" name="property">
                                        <option value="">--Tìm phòng--</option>
                                        <option value="0">Phòng trống</option>
                                        <option value="1">Phòng 1 người</option>
                                        <option value="2">Phòng 2 người</option>
                                        <option value="3">Phòng 3 người</option>
                                        <option value="4">Phòng 4 người</option>
                                        <option value="5">Phòng 5 người</option>
                                        <option value="6">Phòng 6 người</option>
                                        <option value="7">Phòng 7 người</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                    <select class="js-select2" name="property">
                                        <option value="">--Tìm khu--</option>
                                        @foreach($itemZone as $item)
                                        @php
                                            $id_zone = $item->id_zone;
                                            $name_zone = $item->name_zone;
                                        @endphp
                                        <option value="{{$id_zone}}">{{$name_zone}}</option>
                                        @endforeach
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
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
                                            <td>Khu</td>
                                            <td>Số Người</td>
                                            <td>Trạng thái</td>
                                            <td></td>
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
                                            <tr>
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$id_room}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$name_room}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$name_zone}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$number_people}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if($number_people == 5)
                                                        <button class="btn btn-danger">
                                                            full slot
                                                        </button>
                                                    @else
                                                        <button class="btn btn-warning">
                                                            còn slot
                                                        </button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-info">
                                                        Thêm
                                                    </button>
                                                    <button class="btn btn-success">
                                                        Sửa
                                                    </button>
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
                                    {{$items->links()}}
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
@endsection

