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
                                <i class="zmdi zmdi-account-calendar"></i>Quản lý tài khoản ({{$count}})</h3>
                            <div class="filters m-b-45">
                                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">Chọn tài khoản</option>
                                        <option value="">Mới tạo</option>
                                        <option value="">Tài khoản đã bị khoá</option>
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
                                            <td>username</td>
                                            <td>Role</td>
                                            <td>Status</td>
                                            <td></td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($items as $itemUser)
                                        @php
                                            $id_user = $itemUser->id_user;
                                            $username = $itemUser->username;
                                            $email = $itemUser->email;
                                            $role = $itemUser->role;
                                            $status = $itemUser->status;
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
                                                        <h6>{{$id_user}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$username}}</h6>
                                                        <span>
                                                            <a href="#">{{$email}}</a>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if($role == 0)
                                                        <div>
                                                            <button class="btn btn-success">
                                                                menber
                                                            </button>
                                                        </div>
                                                    @else
                                                        <div>
                                                            <button class="btn btn-warning">
                                                                admin
                                                            </button>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($status == 0)
                                                    <button class="btn btn-info">
                                                        unlock
                                                    </button>
                                                    @else
                                                        <button class="btn btn-danger">
                                                            lock
                                                        </button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                        xoá
                                                    </button>
                                                    <button class="btn btn-info">
                                                        Thêm
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

