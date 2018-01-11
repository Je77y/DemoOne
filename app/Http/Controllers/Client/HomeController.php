<?php

namespace App\Http\Controllers\Client;

use App\BaiViet;
use App\ChuDe;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LienHe;
use App\Slide;
use Mockery\Exception;

class HomeController extends Controller
{
    public function Index()
    {
        $dsslide = Slide::where('hienthi', 1)->get();
        $baivietmoinhat = BaiViet::orderBy('id', 'desc')->first()->get();
        $dsbaiviet = BaiViet::all();
        $dsduan = ChuDe::where('duan', 1)->get();
        return view('frontEnd/home/index', compact(['dsslide', 'baivietmoinhat', 'dsbaiviet', 'dsduan']));
    }

    public function Email(Request $request)
    {
        $mss = new Message(true, "Đăng ký thành công");
        $lienhe = new LienHe;

        $lienhe->hoten = $request->input('hoten');
        $lienhe->email = $request->input('email');
        $lienhe->dienthoai = $request->input('sodienthoai');

        try {
        $lienhe->save();
        } catch (Exception $e)
        {
            $mss->status = false;
            $mss->message = "Bạn ";
        }

        return redirect('/home')->with(json_encode($mss));
    }
//    public function Email(Request $request)
//    {
//        $mss = new Message(true, "Đăng ký thành công");
//        $lienhe = new LienHe;
//        if($request->ajax())
//        {
//            $lienhe->hoten = $request->input('hoten');
//            $lienhe->email = $request->input('email');
//            $lienhe->dienthoai = $request->input('sodienthoai');
//
//            try {
//                $lienhe->save();
//            } catch (Exception $e)
//            {
//                $mss->status = false;
//                $mss->message = "Lỗi. Bạn vui lòng kiểm tra lại thông tin";
//            }
//        }
//        return response(json_encode($mss));
//    }
}
