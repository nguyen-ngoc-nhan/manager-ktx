<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Information extends Model
{
    use HasFactory;
    protected $table = 'information';
    protected $primaryKey = "id_infor";
    public function addItemInforInsert($data){
        return DB::table('information')->insert($data);
    }
    public function getItemInfor(){
        return DB::table('information')->paginate(4);
    }
    public function getItem(){
        return DB::table('information')->get();
    }
    public function getItemInforDetail($id){
        return DB::table('information')->where('id_infor',$id)->get();
    }
    public function getItemInforSchool(){
        return DB::table('information')->select('*')->join('school','information.id_school','=','school.id_school')->get();

    }
    public function getItemInforTP(){
        return DB::table('information')->select('*')->join('tinhthanhpho','information.id_tp','=','tinhthanhpho.id_tp')->get();
    }
    public function getItemInforQH(){
        return DB::table('information')->select('*')->join('quanhuyen','information.id_qh','=','quanhuyen.id_qh')->get();
    }
    public function getItemInforXP(){
        return DB::table('information')->select('*')->join('xaphuongthitran','information.id_xp','=','xaphuongthitran.id_xa')->get();
    }
    public function updateStatusBookRoom($dataBookRoom, $id_user_infor){
        return DB::table('information')->where('id_user', $id_user_infor)->update($dataBookRoom);
    }  
    
}
