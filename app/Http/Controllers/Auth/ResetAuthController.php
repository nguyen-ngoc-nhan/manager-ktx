<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetAuthController extends Controller
{
    public function resetPass(){
        return view('auth.resetpass.reset');
    }
}
