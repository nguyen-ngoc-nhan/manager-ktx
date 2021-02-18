<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class IndexManagerController extends Controller
{
    public function __construct(News $news){
        $this->news = $news;
    }
    public function trangchu(){
        $items = $this->news->getItem();
        $count = News::all()->count();
        return view('manager.trangchu.trangchu',compact('items','count'));
    }
}
