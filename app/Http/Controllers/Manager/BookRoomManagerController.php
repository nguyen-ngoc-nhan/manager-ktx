<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookRoom;
use App\Models\Room;
use App\Models\Information;

class BookRoomManagerController extends Controller
{
    public function __construct(BookRoom $book_room, Room $room, Information $infor){
        $this->book_room = $book_room;
        $this->room = $room;
        $this->infor = $infor;
    }
    public function datPhong(){
        $items = $this->book_room->getItem();
        return view('manager.qldatphong.qldatphong',compact('items'));
    }
    public function xacNhanDangKy(Request $request, $id_user_infor){
        $status_book_room = $request->status_book_room;
        $dataBookRoom = [
            'status_book_room'=>$status_book_room
        ];
        $result = $this->infor->updateStatusBookRoom($dataBookRoom,$id_user_infor);
        if($result){
            return redirect()->back()->with('msg','Đã xác nhận đăng ký phòng thành công!');
        }else{
            return redirect()->back()->with('error','Lỗi. Vui lòng thử lại!');
        }
    }
}
