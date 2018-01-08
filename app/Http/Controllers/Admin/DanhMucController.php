<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DanhMuc;

class DanhMucController extends Controller
{
    public function Index()
    {
        return view('backend/danhmuc/danhsach');
    }

    public function Create()
    {
        //
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

    public function Update(Request $request, $id)
    {
        //
    }

    public function Delete($id)
    {

    }

    public function Destroy($id)
    {
        //
    }
}
