<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function lienHe(){
        return view('admin.lienhe.lienhe');
    }
}
