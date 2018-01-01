<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login()
    {
    	return view('backend/taikhoan/dangnhap');
    }

    public function signin(Request $request)
    {
    	
    }
}
