<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserManagerController extends Controller
{
    public function __construct(User $user){
        $this->user = $user;
    }
    public function qlTaiKhoan(){
        $items = $this->user->getItem();
        $count = User::all()->count();
        return view('manager.qltaikhoan.qltaikhoan',compact('items','count'));
    }
}
