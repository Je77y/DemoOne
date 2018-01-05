<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChuDe;
use App\Message;

class ChuDeController extends Controller
{
    public function chudes()
    {
        $dschude = ChuDe::all();
        return view('backend/chude/list', compact('dschude'));
    }

    public function index()
    {
        return view('backend/chude/index');
    }

    public function store(Request $request)
    {
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
                    $mss = new Message('Loi', 'Sai dinh dang anh');
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
            $chude->save();
            $mss = new Message('Thanh cong', 'Them thanh cong');
            return response()->json($mss);
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
            else 
            {
                $chude->hinhanh = $request->get('hinhanh');
            }
            $chude->save();
            $mss = new Message('Thanh cong', 'Them thanh cong');
            return response()->json($mss);
        }
    }

    public function destroy($id)
    {
        $chude = Chude::find($id);
        $chude->destroy();
        $mss = new Message("Thanh cong", "Xoa thanh cong" );
        return response()->json($mss);
    }
}
