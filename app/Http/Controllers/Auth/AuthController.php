<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.auth.login');
    }
    public function postCheck(Request $request){
    	$email = $request->email;
    	$password = $request->password;
    	if(Auth::attempt(['email'=>$email,'password'=>$password,'role'=>0,'status'=>0])){
    		return redirect()->route('admin.trangchu');
    	}else if(Auth::attempt(['email'=>$email,'password'=>$password,'role'=>1,'status'=>0])){
			return redirect()->route('manager.trangchu');
		}else if(Auth::attempt(['email'=>$email,'password'=>$password,'role'=>0,'status'=>1])){
			return redirect()->route('auth.login')->with('error','Tài khoản của bạn đã bị khoá!');
    	}else{
			return redirect()->route('auth.login')->with('error','Sai mật khẩu hoặc username!');
		}
    }
    public function logout(){
    	Auth::logout();
    	return redirect()->route('auth.login');
    }
	public function logoutManager(){
    	Auth::logout();
    	return redirect()->route('auth.login');
    }
}
