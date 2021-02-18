<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterAuthController extends Controller
{
    public function __construct(User $user){
            $this->user = $user;
    }
    public function register(){
        return view('auth.register.register');
    }
    public function postAdd(Request $request){
    	$username = $request->username;
        $password = $request->password;
        $email = $request->email;

        $data = [
            'username' => $username,
            'password' => bcrypt($password),
            'email' => $email,
            'role' => 0
        ];
        $result = $this->user->addItem($data);
        if($result){
            return redirect()->route('auth.login')->with('msg','Bạn đã đăng ký thành công, đăng nhập tại đây!');
        }else{
            return redirect()->route('auth.register')->with('error','Lỗi. Vui lòng thử lại!');
        }
    }

}
