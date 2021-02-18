<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Quanhuyen extends Model
{
    use HasFactory;
    protected $table = 'quanhuyen';
    protected $primaryKey = "id_qh";
    public function getItemQH(){
        return DB::table('quanhuyen')->get();
    }
}
