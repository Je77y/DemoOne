<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TaiLieuDuAn;
use App\Message;

class TaiLieuController extends Controller
{
    public function Index()
    {
        return view('backend/tailieu/danhsach');
    }

    public function Create()
    {
        return view('backend/tailieu/_createModal');
    }

    public function Store(Request $request)
    {
        //
    }

    public function Show($id)
    {
        //
    }

    public function Edit($id)
    {
        //
    }

    public function Update(Request $request)
    {
        //
    }

    public function Destroy($id)
    {
        //
    }
}
