<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Zone;

class RoomManagerController extends Controller
{
    public function __construct(Room $room, Zone $zone){
        $this->room = $room;
        $this->zone = $zone;
    }
    public function qlPhong(){
        $items = $this->room->getItem();
        $itemZone = $this->zone->getItemZone();
        $count = Room::all()->count();

        return view('manager.qlphong.qlphong',compact('items','count','itemZone'));
    }
}
