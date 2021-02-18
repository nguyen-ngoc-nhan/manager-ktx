<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Xaphuong extends Model
{
    use HasFactory;
    protected $table = 'xaphuongthitran';
    protected $primaryKey = "id_xa";
    public function getItemXP(){
        return DB::table('xaphuongthitran')->get();
    }
}
