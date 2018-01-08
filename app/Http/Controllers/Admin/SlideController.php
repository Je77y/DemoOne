<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\Message;
use Carbon\Carbon;

class SlideController extends Controller
{
    public function Reload()
    {
        $dsslide = Slide::orderBy('id', 'desc')->get();
        return response(json_encode($dsslide));
    }

    public function Index()
    {
        $dsslide = json_encode(Slide::orderBy('id', 'desc')->get());
        return view('backend/slide/danhsach', compact('dsslide'));
    }

    public function Create()
    {
        return view('backend/slide/_createModal');
    }

    public function Store(Request $request)
    {
        $mss = new Message(true, "Thêm thành công");
        if($request->ajax())
        {
            $slide = new Slide;
            $slide->ngaybatdau = Carbon::createFromFormat('d/m/Y', $request->get('ngaybatdau'));
            $slide->ngayketthuc = Carbon::createFromFormat('d/m/Y', $request->get('ngayketthuc'));

//            $slide->ngaybatdau = Carbon::parse($request->get('ngaybatdau'))->format('Y/m/d');
//            $slide->ngayketthuc = Carbon::parse($request->get('ngayketthuc'))->format('Y/m/d');
            $slide->hienthi = $request->get('hienthi') == 1 ? 1 : 0;
            if($request->hasFile('hinhanh'))
            {
                $file = $request->file('hinhanh');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                {
                    $mss->status = false;
                    $mss->message = "Sai định dạng ảnh";
                    return response(json_encode($mss));
                }
                $name = $file->getClientOriginalName();
                $Hinh = str_random(4)."_". changeTitle($name).'.'. $duoi;
                while(file_exists("upload/slide/".$Hinh))
                {
                    $Hinh = str_random(4)."_". $name;
                }
                $file->move("upload/slide", $Hinh);
                $slide->hinhanh = $Hinh;
            }
            try {
                $slide->save();
            }
            catch (Exception $e)
            {
                $mss->status = false;
                $mss->message = "Thêm thất bại";
            }
        }
        return response(json_encode($mss));
    }

    public function Show($id)
    {
        //
    }

    public function Edit($id)
    {
        $slide = Slide::find($id);
        return view('backend/slide/_editModal', compact('slide'));
    }

    public function Update(Request $request)
    {
        $mss = new Message(true, "Thêm thành công");
        if($request->ajax())
        {
            $slide = Slide::find($request->get('id'));
            $slide->ngaybatdau = Carbon::createFromFormat('d/m/Y', $request->get('ngaybatdau'));
            $slide->ngayketthuc = Carbon::createFromFormat('d/m/Y', $request->get('ngayketthuc'));

//            $slide->ngaybatdau = Carbon::parse($request->get('ngaybatdau'))->format('Y/m/d');
//            $slide->ngayketthuc = Carbon::parse($request->get('ngayketthuc'))->format('Y/m/d');
            $slide->hienthi = $request->get('hienthi') == 1 ? 1 : 0;
            if($request->hasFile('hinhanh'))
            {
                $file = $request->file('hinhanh');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                {
                    $mss->status = false;
                    $mss->message = "Sai định dạng ảnh";
                    return response(json_encode($mss));
                }
                $name = $file->getClientOriginalName();
                $Hinh = str_random(4)."_". changeTitle($name).'.'. $duoi;
                while(file_exists("upload/slide/".$Hinh))
                {
                    $Hinh = str_random(4)."_". $name;
                }
                $file->move("upload/slide", $Hinh);
                $slide->hinhanh = $Hinh;
            }
            try {
                $slide->save();
            }
            catch (Exception $e)
            {
                $mss->status = false;
                $mss->message = "Thêm thất bại";
            }
        }
        return response(json_encode($mss));
    }

    public function Destroy($id)
    {
        Slide::destroy($id);
        $mss = new Message(true, 'Xoá thành công');
        return response(json_encode($mss));
    }
}
