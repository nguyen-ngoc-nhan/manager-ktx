<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tinhthanhpho extends Model
{
    use HasFactory;
    protected $table = 'tinhthanhpho';
    protected $primaryKey = "id_tp";
    public function getItem(){
        return DB::table('tinhthanhpho')->get();
    }
}
