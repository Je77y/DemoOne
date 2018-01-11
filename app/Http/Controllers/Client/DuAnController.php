<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChuDe;
use App\Slide;

class DuAnController extends Controller
{
    public function Home()
    {
        $dsslide = Slide::where('hienthi', 1)->get();
        $dsduan = ChuDe::where('duan', 1)->get();
        return view('frontEnd/duan/home', compact(['dsslide', 'dsduan']));
    }


    public function Index($id)
    {
        $duan = ChuDe::find($id);
        return view('frontEnd/duan/index',compact('duan'));
    }


}
