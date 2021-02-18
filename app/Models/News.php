<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = "id_news";
    public function getItem(){
        return DB::table('news')->orderBy('id_news','desc')->get();
    }
}
