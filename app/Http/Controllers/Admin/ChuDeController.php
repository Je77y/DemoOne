<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChuDe;
use App\Message;

class ChuDeController extends Controller
{
    public function search(Request $request) 
    {
        $tukhoa = $request->get('tukhoa');
        $loai = $request->get('loai');
        $chude = ChuDe::where('id', '>', 0);
        if($loai != -1)
        {
           $chude = $chude->where('duan', $loai);
        }
        if (!empty($tukhoa)) {
            $chude = $chude->where('tenchude', 'like', '%'.$tukhoa.'%');
            # code...
        }
        return response(json_encode($chude->orderBy('id', 'desc')->get()));
    }

    // public function chudes()
    // {
    //     return view('backend/chude/list');
    // }

    public function index()
    {
        $dschude6 = ChuDe::orderBy('id', 'desc')->get();
        $dschude = json_encode($dschude6);
        return view('backend/chude/index', compact('dschude'));
    }
    public function reload()
    {
        $dschude = ChuDe::orderBy('id', 'desc')->get();
        return response(json_encode($dschude));
    }
    public function store(Request $request)
    {
        $mss = new Message(true, 'Thêm mới chủ đề thành công');
        if($request->ajax())
        {
            $chude = new ChuDe;
            $chude->tenchude = $request->get('tenchude');
            $chude->tomtat = $request->get('tomtat');
            $chude->duan = $request->get('loai');

            if($request->hasFile('hinhanh'))
            {
                
                $file = $request->file('hinhanh');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                {
                    return response(json_encode($mss));
                }

                $name = $file->getClientOriginalName();
                $Hinh = str_random(4)."_". $name;
                while(file_exists("upload/".$Hinh))
                {
                    $Hinh = str_random(4)."_". $name;
                }
                $file->move("upload", $Hinh);
                $chude->hinhanh = $Hinh;
            }
            else 
            {
                $chude->hinhanh = "notfoundimg.png";
            }
            try {
            $chude->save();
                
            } catch (Exception $e) {
                $mss->status = false;
                $mss->message = "Lỗi. Thêm mới thất bại";
            }
            
            return response(json_encode($mss));
        }
    }

    public function show($id)
    {
        $chude = ChuDe::find($id);
        return view('backend/chude/delete', compact('chude'));
    }

    public function edit($id)
    {
        $chude = ChuDe::find($id);
        return view('backend/chude/edit', compact('chude'));
    }

    public function update(Request $request)
    {
         $mss = new Message(true, 'Cập nhật chủ đề thành công');
        if($request->ajax())
        {
            $id = $request->get('id');
            $chude = ChuDe::find($id);
            $chude->tenchude = $request->get('tenchude');
            $chude->tomtat = $request->get('tomtat');
            $chude->duan = $request->get('loai');

            if($request->hasFile('hinhanh'))
            {
                $file = $request->file('hinhanh');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                {
                    $mss = new Message('Loi', 'Sai dinh dang anh');
                    return response()->json($mss);
                }

                $name = $file->getClientOriginalName();
                $Hinh = str_random(4)."_". $name;
                while(file_exists("upload/".$Hinh))
                {
                    $Hinh = str_random(4)."_". $name;
                }
                $file->move("upload", $Hinh);
                $chude->hinhanh = $Hinh;

            }
           
            try {
            $chude->save();
                
            } catch (Exception $e){
               $mss->status = false;
               $mss->message = "Không lưu được dữ liệu";

            }
           
            return response(json_encode($mss));
            // return response($request->all());
        }
    }

    public function destroy($id)
    {
        $chude = Chude::find($id);
        Chude::destroy($id);
        $mss = new Message(true, "Xóa chủ đề thành công" );
        return response(json_encode($mss));
    }
}
