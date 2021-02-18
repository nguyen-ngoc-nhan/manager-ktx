<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Zone;
use App\Models\School;
use App\Models\Tinhthanhpho;
use App\Models\BookRoom;
use App\Models\Information;
use Illuminate\Support\Facades\DB;



class BookRoomController extends Controller
{
    public function __construct(Room $room, Zone $zone, School $school, Tinhthanhpho $tp, BookRoom $book_room, Information $infor){
        $this->room = $room;
        $this->zone = $zone;
        $this->school = $school;
        $this->tp = $tp;
        $this->book_room = $book_room;
        $this->infor = $infor;
    }
    public function dangKyPhong(Request $request){
        $itemTP = $this->tp->getItem();
        $itemZone = $this->zone->getItemZone();
        $count = Room::all()->count();
        if($request->zone && $request->number_people !== ''){
            $items = DB::table('room')->select()->join('zone','room.id_zone','=','zone.id_zone')
                ->Where('room.id_zone','like','%'.$request->zone.'%')
                ->Where('room.number_people','like','%'.$request->number_people.'%')
                ->paginate('6');
        }else{
            $items = DB::table('room')->select()->join('zone','room.id_zone','=','zone.id_zone')
            ->paginate(6);
        }
        $itemCheckDangKy = $this->book_room->getItem();

        //get status_book_room at information
        $itemStatus = $this->infor->getItem();
        $itemCheckDangKy = $this->book_room->getItem();

        $id_room_request = $request->id_room;
        $itemPeople = DB::table('book_room')
        ->select(DB::raw('count(*) as number_people','id_room'))
        ->where('id_room','=','id_room_request')
        ->get();

        return view('admin.dangkyphong.dkphong',compact('items','itemZone','count','itemCheckDangKy','itemStatus'));
    }
    public function postDKP(Request $request, $id, $id_user_infor){
        $id_user = $request->id_user;
        $id_room = $request->id_room;
        $name_room = $request->name_room;
        $number_people = $request->number_people;
        $status_book_room = $request->status_book_room;
        $data = [
            'id_user'=>$id_user,
            'id_room'=>$id_room,
            'name_room'=>$name_room
        ];
        $dataRoom = [
            'number_people'=>$number_people + 1
        ];
        $dataBookRoom = [
            'status_book_room'=>$status_book_room
        ];
        $result = $this->book_room->insertBookRoom($data);
        $result1 = $this->room->updateStatusRoom($dataRoom, $id);
        $result2 = $this->infor->updateStatusBookRoom($dataBookRoom,$id_user_infor);
        if($result){
            return redirect()->back()->with('msg','Đã đăng ký phòng thành công, đang chờ phê duyệt!');
        }else{
            return redirect()->back()->with('error','Lỗi. Vui lòng thử lại!');
        }
    }
    
}
