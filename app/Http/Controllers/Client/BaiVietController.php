<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BaiViet;
use App\ChuDe;
class BaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $baiviet = BaiViet::where('slug', 'like', $slug)->take(1)->get();
//        $id = $baiviet[0]->id;
        $baiViet = $baiviet[0];
        $dsbaiviet = BaiViet::orderBy('id', 'desc')->get();
//        $baiViet =  BaiViet::find($id);
        $dsBVChuDe = BaiViet::where('chudeid', $baiViet->chudeid)->get();
        return view('frontEnd/baiviet/index',compact(['baiViet', 'dsBVChuDe', 'dsbaiviet']));
    }

    public function ChuDeBaiViet($id)
    {
        $dsbaiviet = BaiViet::where('chudeid', $id)->get();
        $chude = ChuDe::find($id);
        return view('fontEnd/baiviet/danhsach', compact(['dsbaiviet', 'chude']));
    }
}
