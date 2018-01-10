<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LienHe;
use App\Slide;
use Mockery\Exception;

class HomeController extends Controller
{
    public function Index()
    {
        $dsslide = Slide::all();
        return view('frontEnd/home/index', compact('dsslide'));
    }

    public function Email(Request $request)
    {
        $lienhe = new LienHe;
        $lienhe->hoten = $request->input('hoten');
        $lienhe->email = $request->input('email');
        $lienhe->dienthoai = $request->input('sodienthoai');
        $lienhe->save();

        return redirect('/home');
    }
}
