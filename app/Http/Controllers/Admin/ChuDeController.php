<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChuDe;

class ChuDeController extends Controller
{
    public function index()
    {
        $dschude = ChuDe::orderBy('updated_at', 'desc')->Paginate(9);
        return view('backend/chude/danhsach', compact('dschude'));
    }

    public function create()
    {
        return view('backend/chude/them');
    }

    public function store(Request $request)
    {
        $chude = new ChuDe;
        $chude->tenchude = $request->get('tenchude');
        $chude->tomtat = $request->get('tomtat');
        $chude->duan = $request->get('duan') == 0 ? 0 : 1;

        if ($request->hasFile('hinhanh'))
        {
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/chude/them')->with('loi', 'Ban chi duoc chon file co duoi la jpg, png hoac jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_". $name;
            while(file_exists("upload/".$Hinh))
            {
                $Hinh = str_random(4)."_". $name;
            }
            $file->move("upload/", $Hinh);
            $chude->hinhanh = $Hinh;
        }
        else 
        {
            $chude->hinhanh = "imagenotfound.png";
        }
        $chude->save();

        return redirect('/admin/chude');
    }

    public function show(Request $request)
    {
        $text = $request->get('tukhoa');
        $duan = $request->get('isDuAn');
        if (!empty($text))
        {
            if ($duan != -1)
                $dschude = ChuDe::whereRaw('match(tenchude, tomtat) against(? in natural language mode)', $text)->get();
            $dschude = ChuDe::where('duan', $duan)->get();
        }
        else
        {
            if ($duan == -1)
                return redirect('/admin/chude');
            $dschude = ChuDe::where('duan', $duan)->get();
        }
        return view('backend/chude/timkiem', compact('dschude', 'text', 'duan'));
    }

    public function edit($id)
    {
        $chude = ChuDe::find($id);
        return view('backend/chude/sua', compact('chude'));
    }

    public function update(Request $request, $id)
    {
        $chude = ChuDe::find($id);
        $chude->tenchude = $request->get('tenchude');
        $chude->tomtat = $request->get('tomtat');
        $chude->duan = $request->get('duan') == 0 ? 0 : 1;

        if ($request->hasFile('hinhanh'))
        {
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/chude/them')->with('loi', 'Ban chi duoc chon file co duoi la jpg, png hoac jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_". $name;
            while(file_exists("upload/".$Hinh))
            {
                $Hinh = str_random(4)."_". $name;
            }
            $file->move("upload/", $Hinh);
            $chude->hinhanh = $Hinh;
        }
        $chude->save();

        return redirect('/admin/chude');
    }

    public function destroy($id)
    {
        $chude = ChuDe::find($id);
        $chude->delete();
        return redirect('/admin/chude')->with('thongbao', 'Xoa thanh cong');
    }
}
