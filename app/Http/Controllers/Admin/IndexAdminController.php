<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class IndexAdminController extends Controller
{
    public function __construct(News $news){
        $this->news = $news;
    }
    public function trangchu(){
        $items = $this->news->getItem();
        $count = News::all()->count();
        return view('admin.trangchu.trangchu',compact('items','count'));
    }
}
