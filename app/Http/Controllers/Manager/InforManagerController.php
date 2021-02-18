<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tinhthanhpho;
use App\Models\Quanhuyen;
use App\Models\Xaphuong;
use App\Models\School;
use App\Models\Information;
class InforManagerController extends Controller
{
    public function __construct(User $user, Tinhthanhpho $tp, School $school, Information $infor, Quanhuyen $qh, Xaphuong $xp){
        $this->user = $user;
        $this->tp = $tp;
        $this->qh = $qh;
        $this->xp = $xp;
        $this->school = $school;
        $this->infor = $infor;
        
    }
    public function qlSinhVien(){
        $itemInfor = $this->infor->getItemInfor();
        $itemInforSchool = $this->infor->getItemInforSchool();
        $itemInforTP = $this->infor->getItemInforTP();
        $itemInforQH = $this->infor->getItemInforQH();
        $itemInforXP = $this->infor->getItemInforXP();
        $count = Information::all()->count();

        return view('manager.qlsinhvien.qlsinhvien',compact('itemInfor','itemInforSchool','itemInforTP','itemInforQH','itemInforXP','count'));
    }
    public function chiTietSV($id){
        $itemInfor = $this->infor->getItemInfor();
        $itemInforDetail = $this->infor->getItemInforDetail($id);
        $itemInforSchool = $this->infor->getItemInforSchool();
        $itemInforTP = $this->infor->getItemInforTP();
        $itemInforQH = $this->infor->getItemInforQH();
        $itemInforXP = $this->infor->getItemInforXP();
        return view('manager.qlsinhvien.chitiet',compact('itemInfor','itemInforSchool','itemInforTP','itemInforQH','itemInforXP','itemInforDetail'));
    }
}
