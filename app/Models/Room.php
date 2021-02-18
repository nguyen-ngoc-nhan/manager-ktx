<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    use HasFactory;
    protected $table = 'room';
    protected $primaryKey = "id_room";
    public function updateStatusRoom($dataRoom,$id){
        return DB::table('room')->where('id_room',$id)->update($dataRoom);
    }
    public function getItem(){
        return DB::table('room')->select('*')->join('zone','room.id_zone','=','zone.id_zone')->paginate(6);
    }
    // public function getBookRoom(){
    //     return DB::table('room')->select('status_book_room')->join('book_room','room.id_room','=','book_room.id_room')->paginate(6);
    // }
}
