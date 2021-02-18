<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookRoom extends Model
{
    use HasFactory;
    protected $table = 'book_room';
    protected $primaryKey = "id_book_room";
    public function insertBookRoom($data){
        return DB::table('book_room')->insert($data);
    }
    public function getItem(){
        return DB::table('book_room')->select('*')->join('information','book_room.id_user','=','information.id_user')
        ->paginate(6);
    }
    public function getCheckDangKy(){
        return DB::table('book_room')->select('*')->join('information','book_room.id_user','=','information.id_user')
        ->join('room','book_room.id_room','=','room.id_room')
        ->paginate(6);
    }
      
}
