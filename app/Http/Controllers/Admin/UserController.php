<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
use App\Message;
use Mockery\Exception;

class UserController extends Controller
{
    public function Index()
    {
        $data = User::orderBy('id', 'desc')->get();
        return view('backend/taikhoan/index', compact('data'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function Reload()
    {
        $lstAll = User::orderby("id","desc")->get();
        return response(json_encode($lstAll));
    }
    public function Create()
    {
        return view('backend/taikhoan/_createModal');
    }

    public function SaveCreate(Request $request)
    {
        $rs = new Message(true);
        try{
            $ngdung = new User;
            $ngdung->name = $request->get("taiKhoan");
            $ngdung->email = $request->get("email");
            $ngdung->password = Hash::make($request->get("matKhau"), [
                'rounds' => 12
            ]);
            $ngdung->save();
        }catch (Exception $e)
        {
            $rs->status=false;
            $rs->message="Không lưu được người dùng";
        }

        return response(json_encode($rs));
    }

    public function CheckExist(Request $request)
    {
        $rs= new Message(false);
        $name = $request->taikhoan;
        $taiKhoan = User::where('email','=',$name)->latest()->take(1)->get();
        if (count($taiKhoan)>0) {
            $rs->status=true;
        }
        return response(json_encode($rs));
    }

    public function login()
    {
        return view('backend/taikhoan/dangnhap');
    }

    public function signin(Request $request)
    {

    }
}
