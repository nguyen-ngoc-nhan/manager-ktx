<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Zone extends Model
{
    use HasFactory;
    protected $table = 'zone';
    protected $primaryKey = "id_zone";
    public function getItemZone(){
        return DB::table('zone')->get();
    }
}
