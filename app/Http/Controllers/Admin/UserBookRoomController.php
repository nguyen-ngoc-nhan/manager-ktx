<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\BookRoom;

class UserBookRoomController extends Controller
{
    public function __construct(Information $infor, BookRoom $book_room){
        $this->infor = $infor;
        $this->book_room = $book_room;
    }
    public function ttPhongDK(){
        $itemInformation = $this->infor->getItem();
        $itemBookRoom = $this->book_room->getCheckDangKy();
        return view('admin.thongtinphongdk.ttphongdk',compact('itemInformation','itemBookRoom'));
    }
}
