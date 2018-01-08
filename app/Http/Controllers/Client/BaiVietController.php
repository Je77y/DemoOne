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
    public function index($id)
    {
        $baiViet =  BaiViet::find($id);
        $chude = ChuDe::find($baiViet->chudeid);
        return view('frontEnd/baiviet/index',compact('baiViet','chude'));
    }


}
