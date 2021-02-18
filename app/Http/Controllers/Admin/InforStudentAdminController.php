<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tinhthanhpho;
use App\Models\Quanhuyen;
use App\Models\Xaphuong;
use App\Models\School;
use App\Models\Information;

class InforStudentAdminController extends Controller
{
    public function __construct(User $user, Tinhthanhpho $tp, School $school, Information $infor, Quanhuyen $qh, Xaphuong $xp){
        $this->user = $user;
        $this->tp = $tp;
        $this->qh = $qh;
        $this->xp = $xp;
        $this->school = $school;
        $this->infor = $infor;
        
    }
    public function thongtinsinhvien(){
        $itemTP = $this->tp->getItem();
        $itemInfor = $this->infor->getItemInfor();
        $itemSchool = $this->school->getItemSchool();
        $itemInforSchool = $this->infor->getItemInforSchool();
        $itemInforTP = $this->infor->getItemInforTP();
        $itemInforQH = $this->infor->getItemInforQH();
        $itemInforXP = $this->infor->getItemInforXP();

        return view('admin.thongtinsinhvien.ttsinhvien',compact('itemTP','itemSchool','itemInfor','itemSchool','itemInforSchool','itemInforTP','itemInforQH','itemInforXP'));
    }
    public function postResetThongTin(Request $request, $id){
        $id_user = $request->id_user;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $data = ['username'=>$username,'email'=>$email,'password'=>bcrypt($password)];
        $result = $this->user->editItem($data,$id);
        if($result){
            return redirect()->route('admin.thongtin.sinhvien')->with('msg','Thông tin tài khoản đã cập nhật thành công!');
        }else{
            return redirect()->route('admin.thongtin.sinhvien')->with('error','Lỗi. Vui lòng thử lại!');
        }
    }
    public function getTinhThanh(Request $request){
        $data = $request->all();
        if($data['acction']){
            $output = '';
            if($data['acction'] == 'tp'){
                $select_qh = Quanhuyen::Where('id_tp',$data['id_tp1'])->get();
                $output.= '<option>--Cập nhật quận, huyện--</option>';
                foreach($select_qh as $key => $itemQH){
                    $output.= '<option value="'.$itemQH->id_qh.'">'.$itemQH->name_qh.'</option>';
                }
            }else{
                $select_xp = Xaphuong::Where('id_qh',$data['id_tp1'])->get();
                $output.= '<option>--Cập nhật phường, xã--</option>';
                foreach($select_xp as $key1 => $itemXP){
                    $output.= '<option value="'.$itemXP->id_xa.'">'.$itemXP->name_xp.'</option>';
                }
            }
        }
        echo $output;
    }
    public function addThongTinSV(Request $request){
        $id_user = $request->id_user;
        $fullname = $request->fullname;
        $ngaySinh = $request->ngaySinh;
        $sex = $request->sex;
        $school = $request->school;
        $khoa = $request->khoa;
        $maSV = $request->maSV;
        $phone = $request->phone;
        $cmnd = $request->cmnd;

        $tp = $request->tp;
        $qh = $request->qh;
        $xp = $request->xp;
        
        $picture = $request->picture;
        $tmp = $request->file('picture')->store('public/files');
        $tmp = explode('/', $tmp);
        $picture = end($tmp);
        $data = [
            'id_user'=> $id_user,
            'fullname'=> $fullname,
            'date_of_brith'=> $ngaySinh,
            'sex'=> $sex,
            'id_school'=> $school,
            'khoa'=> $khoa,
            'masv'=> $maSV,
            'number_phone'=> $phone,
            'cmnd'=> $cmnd,
            'id_tp'=> $tp,
            'id_qh'=> $qh,
            'id_xp'=> $xp,
            'picture'=> $picture
        ];
        $result = $this->infor->addItemInforInsert($data);
        if($result){
            return redirect()->route('admin.thongtin.sinhvien')->with('msg1','Thông tin đã tạo thành công!');
        }else{
            return redirect()->route('admin.thongtin.sinhvien')->with('error1','Lỗi. Vui lòng thử lại!');
        }

    }
}
