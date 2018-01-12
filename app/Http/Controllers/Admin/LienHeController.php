<?php

namespace App\Http\Controllers\Admin;

use App\LienHe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Message;

class LienHeController extends Controller
{
    public function Reload()
    {
        $dslienhe = json_encode(LienHe::orderBy('id')->get());
        return response(json_encode($dslienhe));
    }

    public function Index()
    {
        $dslienhe = json_encode(LienHe::orderBy('id')->get());
        return view('backend/lienhe/danhsach', compact('dslienhe'));
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

    public function Destroy($id)
    {
        LienHe::destroy($id);
        $mss = new Message(true, 'Xoá thành công');
        return response(json_encode($mss));
    }
}
