<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function Index()
    {
        $data = User::orderBy('id', 'desc')->get();
        return view('backend/taikhoan/index', compact('$data'));
    }

    public function login()
    {
    	return view('backend/taikhoan/dangnhap');
    }

    public function signin(Request $request)
    {
    	
    }
}
