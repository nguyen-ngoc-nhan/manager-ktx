<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class School extends Model
{
    use HasFactory;
    protected $table = 'school';
    protected $primaryKey = "id_school";
    public function getItemSchool(){
        return DB::table('school')->get();
    }
}
