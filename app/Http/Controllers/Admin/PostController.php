<?php

namespace App\Http\Controllers\Admin;

use App\BaiViet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;

class PostController extends Controller
{
    public function Reload($id)
    {
        $dsbaiviet = BaiViet::where('chudeid', '=', $id)->orderBy('id', 'desc')->get();
        return response(json_encode($dsbaiviet));
    }

    public function Index($idchude)
    {
        $dsbaiviet1 = BaiViet::where('chudeid', '=', $idchude)->orderBy('created_at', 'desc')->get();
//        foreach ( $dsbaiviet1 as $item)
//        {
//            $item->noidung="";
//        }
        $dsbaiviet = json_encode($dsbaiviet1);
        return view('backend/baiviet/danhsach', compact('dsbaiviet', 'idchude'));
    }

    public function Create($idchude)
    {
        return view('backend/baiviet/_createModal', compact('idchude'));
    }

    public function Store(Request $request)
    {
        $mss = new Message(true, 'Thêm mới bài viết thành công');
        if($request->ajax())
        {
            $baiviet = new BaiViet;
            $baiviet->tenbaiviet = $request->get('tenbaiviet');
            $baiviet->tomtat = $request->get('tomtat');
            $baiviet->noidung = $request->get('noidung');
            $baiviet->hienthi = $request->get('hienthi') == 1 ? 1 : 0;
            $baiviet->slug = $request->get('slug');
            $baiviet->chudeid = $request->get('idchude');

            if($request->hasFile('hinhanh'))
            {

                $file = $request->file('hinhanh');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                {
                    return response(json_encode($mss));
                }
                //$file = '.'. $file;
                $name = $file->getClientOriginalName();
                $Hinh = str_random(4)."_". changeTitle($name);
                while(file_exists("upload/".$Hinh))
                {
                    $Hinh = str_random(4)."_". $name;
                }
                $file->move("upload", $Hinh);
                $baiviet->hinhanh = $Hinh;
            }
            else
            {
                $baiviet->hinhanh = "notfoundimg.png";
            }
            try {
                $baiviet->save();

            } catch (Exception $e) {
                $mss->status = false;
                $mss->message = "Lỗi. Thêm mới thất bại";
            }

            return response(json_encode($mss));
        }
    }

    public function Show($id)
    {
        return view('backend/baiviet/_showBaiViet');
    }

    public function Edit($id)
    {
        $baiviet = BaiViet::find($id);
        return view('backend/baiviet/_editModal', compact('baiviet'));
    }

    public function Update(Request $request)
    {
        $mss = new Message(true, 'Cập nhật bài viết thành công');
        if($request->ajax())
        {
            $baiviet = BaiViet::find($request->get('id'));
            $baiviet->tenbaiviet = $request->get('tenbaiviet');
            $baiviet->tomtat = $request->get('tomtat');
            $baiviet->noidung = $request->get('noidung');
            $baiviet->hienthi = $request->get('hienthi') == 1 ? 1 : 0;
            $baiviet->slug = $request->get('slug');
//            $baiviet->chudeid = $this->id;

            if($request->hasFile('hinhanh'))
            {

                $file = $request->file('hinhanh');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                {
                    return response(json_encode($mss));
                }
                //$file = '.'. $file;
                $name = $file->getClientOriginalName();
                $Hinh = str_random(4)."_". changeTitle($name);
                while(file_exists("upload/".$Hinh))
                {
                    $Hinh = str_random(4)."_". $name;
                }
                $file->move("upload", $Hinh);
                $baiviet->hinhanh = $Hinh;
            }
            try {
                $baiviet->save();

            } catch (Exception $e) {
                $mss->status = false;
                $mss->message = "Lỗi. Cập nhật thất bại";
            }

            return response(json_encode($mss));
        }
    }

    public function Delete($id)
    {
        return view('backend/baiviet/_deleteModal', compact('id'));
    }

    public function Destroy($id)
    {
        //$baiviet = BaiViet::find($id);
        BaiViet::destroy($id);
        $mss = new Message(true, 'Xoá thành công');
        return response(json_encode($mss));
    }
}
