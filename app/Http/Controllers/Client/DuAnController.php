<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChuDe;

class DuAnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $duan = ChuDe::find($id);
        return view('frontEnd/duan/index',compact('duan'));
    }


}
