@extends('templates.admin.master')
@section('main-content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                        @foreach($itemInfor as $information)
                            @php
                                $id_user1 = $information->id_user;
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
                        @endforeach
                        
                        @foreach($itemInforSchool as $inforSchool)
                            @php
                                $id_school1 = $inforSchool->id_school;
                                $name_school = $inforSchool->name_school;
                                
                            @endphp
                        @endforeach
                        @foreach($itemInforTP as $inforTP)
                            @php
                                $id_tp1 = $inforTP->id_tp;
                                $name_tp = $inforTP->name_tp;
                                
                            @endphp
                        @endforeach
                        @foreach($itemInforQH as $inforQH)
                            @php
                                $id_qh1 = $inforQH->id_qh;
                                $name_qh = $inforQH->name_qh;
                                
                            @endphp
                        @endforeach
                        @foreach($itemInforXP as $inforXP)
                            @php
                                $id_xp1 = $inforXP->id_xa;
                                $name_xp = $inforXP->name_xp;
                                
                            @endphp
                        @endforeach
                        @php
                            if(Auth::check()){
                                $user =Auth::user();
                                $id_user = $user->id_user;
                            }
                        @endphp
                        @if($id_user == $id_user1)
                        <div class="col-lg-6">  
                            {{-- start massage --}}
                            @if(Session()->has('msg1'))
                                <div class="alert alert-success">
                                    {{Session()->get('msg1')}}
                                </div>
                            @elseif(Session()->has('error1'))
                                <div class="alert alert-danger">
                                    {{Session()->get('error1')}}
                                </div>
                            @endif
                            {{-- end massage --}}
                            <div class="card">
                                <div class="card-header">
                                    <strong>THÔNG TIN LÝ LỊCH SINH VIÊN</strong>
                                    <small>Cập nhật</small>
                                </div>
                                <form action="{{route('admin.them.thongtin')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body card-block">
                                    
                                    <input type="hidden" id="id_user" name="id_user" value="{{$id_user}}">
                                    <div class="form-group">
                                        <label for="fullname" class=" form-control-label">Họ và tên</label>
                                        <input type="text" id="fullname" name="fullname" value="{{$fullname}}" placeholder="Cập nhập họ tên" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="ngaySinh" class=" form-control-label">Ngày sinh</label>
                                        <input type="text" id="ngaySinh" name="ngaySinh" value="{{$ngaySinh}}" placeholder="dd/mm/yy" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="sex" class=" form-control-label">Giới tính</label>
                                        <select id="sex" name="sex" class="form-control">
                                            <option>{{$sex}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="school" class=" form-control-label">Trường</label>
                                        <select name="school" id="school" class="form-control choose">
                                            @if($id_school == $id_school1)
                                                <option>{{$name_school}}</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="maSV" class=" form-control-label">Mã sinh viên</label>
                                        <input type="text" id="maSV" name="maSV" value="{{$masv}}" placeholder="Cập nhật mã sinh viên" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="Khoa" class=" form-control-label">Khoa</label>
                                        <input type="text" id="khoa" name="khoa" value="{{$khoa}}" placeholder="Cập nhật khoa" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class=" form-control-label">Số điện thoại</label>
                                        <input type="text" id="phone" name="phone" value="{{$number_phone}}" placeholder="Cập nhật số điện thoại" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="cmnd" class=" form-control-label">Số chứng minh nhân dân</label>
                                        <input type="text" id="cmnd" name="cmnd" value="{{$cmnd}}" placeholder="Cập nhật số chưng minh nhân dân" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="province" class=" form-control-label">Tỉnh/thành phố</label>
                                        <select name="tp" id="tp" class="form-control choose tp">
                                            @if($id_tp == $id_tp1)
                                                <option>{{$name_tp}}</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="district" class=" form-control-label">Quận/huyện</label>
                                        <select name="qh" id="qh" class="form-control choose qh">
                                            @if($id_qh == $id_qh1)
                                                <option>{{$name_qh}}</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ward" class=" form-control-label">Phường/xã</label>
                                        <select name="xp" id="xp" class="form-control xp">
                                            @if($id_xp == $id_xp1)
                                                <option>{{$name_xp}}</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="picture" class="form-control-label">Chọn ảnh đại diện</label>
                                        <input type="file" id="picture" name="picture" class="form-control-file">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" id="sendInfor" class="btn btn-primary btn-sm sendInfor">
                                        <i class="fa fa-dot-circle-o"></i> Gửi
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Huỷ
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6">
                            {{-- start massage --}}
                            @if(Session()->has('msg1'))
                                <div class="alert alert-success">
                                    {{Session()->get('msg1')}}
                                </div>
                            @elseif(Session()->has('error1'))
                                <div class="alert alert-danger">
                                    {{Session()->get('error1')}}
                                </div>
                            @endif
                            {{-- end massage --}}
                            <div class="card">
                                <div class="card-header">
                                    <strong>THÔNG TIN LÝ LỊCH SINH VIÊN</strong>
                                    <small>Cập nhật</small>
                                </div>
                                <form action="{{route('admin.them.thongtin')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body card-block">
                                    <input type="hidden" id="id_user" name="id_user" value="{{$id_user}}">
                                    <div class="form-group">
                                        <label for="fullname" class=" form-control-label">Họ và tên</label>
                                        <input type="text" id="fullname" name="fullname" placeholder="Cập nhập họ tên" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="ngaySinh" class=" form-control-label">Ngày sinh</label>
                                        <input type="text" id="ngaySinh" name="ngaySinh" placeholder="dd/mm/yy" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="sex" class=" form-control-label">Giới tính</label>
                                        <select id="sex" name="sex" class="form-control">
                                            <option value="">--Cập nhật giới tính--</option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="school" class=" form-control-label">Trường</label>
                                        <select name="school" id="school" class="form-control choose">
                                            <option value="">--Cập nhật trường--</option>
                                            @foreach($itemSchool as $school)
                                                @php
                                                    $name_school = $school->name_school;
                                                    $id_school = $school->id_school;
                                                @endphp
                                                <option value="{{$id_school}}">{{$name_school}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="maSV" class=" form-control-label">Mã sinh viên</label>
                                        <input type="text" id="maSV" name="maSV" placeholder="Cập nhật mã sinh viên" class="form-control" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="Khoa" class=" form-control-label">Khoa</label>
                                        <input type="text" id="khoa" name="khoa" placeholder="Cập nhật khoa" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class=" form-control-label">Số điện thoại</label>
                                        <input type="text" id="phone" name="phone" placeholder="Cập nhật số điện thoại" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="cmnd" class=" form-control-label">Số chứng minh nhân dân</label>
                                        <input type="text" id="cmnd" name="cmnd" placeholder="Cập nhật số chưng minh nhân dân" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="province" class=" form-control-label">Tỉnh/thành phố</label>
                                        <select name="tp" id="tp" class="form-control choose tp">
                                            <option value="">--Cập nhật thành phố--</option>
                                            @foreach($itemTP as $item)
                                                @php
                                                    $name_tp = $item->name_tp;
                                                    $id_tp = $item->id_tp;
                                                @endphp
                                                <option value="{{$id_tp}}">{{$name_tp}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="district" class=" form-control-label">Quận/huyện</label>
                                        <select name="qh" id="qh" class="form-control choose qh">
                                            <option value="">--Cập nhật quận, huyện--</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ward" class=" form-control-label">Phường/xã</label>
                                        <select name="xp" id="xp" class="form-control xp">
                                            <option value="">--Cập nhật phường, xã--</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="picture" class="form-control-label">Chọn ảnh đại diện</label>
                                        <input type="file" id="picture" name="picture" class="form-control-file">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" id="sendInfor" class="btn btn-primary btn-sm sendInfor">
                                        <i class="fa fa-dot-circle-o"></i> Gửi
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Huỷ
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    @endif

                    <div class="col-lg-6">
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
                        @php
                            if(Auth::check()){
                                $user =Auth::user();
                                $id_user = $user->id_user;
                                $username = $user->username;
                                $email = $user->email;
                                $password = $user->password;
                            }
                        @endphp
                        <form action="{{route('admin.thongtin.capnhat',['id'=>$id_user])}}" method="post">
                        @csrf
                            <div class="card">
                                <div class="card-header">
                                    <strong>THÔNG TIN TÀI KHOẢN SINH VIÊN</strong>
                                    <small>Cập nhật</small>
                                </div>
                                <div class="card-body card-block">
                                    <input type="hidden" name="id_user" value="{{$id_user}}">
                                    <div class="form-group">
                                        <label for="username" class=" form-control-label">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" id="username" name="username" value="{{$username}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class=" form-control-label">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <input type="email" id="email" name="email" value="{{$email}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="password" class=" form-control-label">Mật khẩu</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                            <input type="password" id="password" name="password" value="{{$password}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Cập nhật
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        
        $('.choose').on('change',function(){
            var acction = $(this).attr('id');
            var id_tp = $(this).val();
            var _token = $('input[name="token"]').val();
            var result = '';
            if(acction == 'tp'){
                result = 'qh';
            }else{
                result = 'xp';
            }
            $.ajax({
                url: '{{url('/select-tinhthanh')}}',
                method: 'GET',
                data:{
                    acction:acction,
                    id_tp1:id_tp,
                    _token:_token
                },
                success:function(data){
                    $('#'+result).html(data);
                }
            });
        });
        // $(document).ready(function(){
        //     $('.sendInfor').click(function(){
        //         var tp = $('.').val();
                
        //     });
        // });
    </script>
    
@endsection