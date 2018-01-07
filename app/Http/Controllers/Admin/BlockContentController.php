<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlockContent;
use App\Message;
use Mockery\Exception;

class BlockContentController extends Controller
{
    public function Index($idduan)
    {
        $dsblockcontent = BlockContent::where('chudeid', '=', $idduan)->get();
//        $dsblockcontent = json_encode($dsblockcontent1);
        return view('backend/blockcontent/danhsach', compact('idduan', 'dsblockcontent'));
    }

    public function Reload($idduan)
    {
        $dsblockcontent = BlockContent::where('chudeid', $idduan)->orderBy('id', 'desc');
        return response(json_encode($dsblockcontent));
    }

//    public function Store(Request $request)
//    {
//        $mss = new Message(true, 'Thêm thành công');
//        if($request->ajax())
//        {
//            try {
//                $block = new BlockContent;
//                $block->tenblock = $request->get('tenblock');
//                $block->thutu = $request->get('thutu');
//                $block->noidung = $request->get('noidung');
//                $block->subtitle = $request->get('subtitle');
//                $block->chudeid = $request->get('idduan');
//
//                //$block->save();
//            } catch (Exception $e){
//                $mss->status = false;
//                $mss->message = "Lỗi. Thêm thất bại";
//            }
//            return response(json_encode($block));
//        }
//    }

    public function Show($id)
    {
        //
    }

    public function Edit($id)
    {
        $blockcontent = BlockContent::find($id);
        return view('backend/blockcontent/_editModal', compact('blockcontent'));
    }

    public function Update(Request $request)
    {

    }

//    public function Destroy($id)
//    {
//        BlockContent::destroy($id);
//        $mss = new Message(true, 'Xoá thành công');
//        return response(json_encode($mss));
//    }
}
