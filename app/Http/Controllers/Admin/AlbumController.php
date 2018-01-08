<?php

namespace App\Http\Controllers\Admin;

use App\ChuDe;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Album;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class AlbumController extends Controller
{
    public function Reload()
    {
        $dsalbum = Album::orderBy('id', 'desc')->get();
        return response(json_encode($dsalbum));
    }

    public function Index()
    {
        $dsAlbum_model = Album::orderBy('id', 'desc')->get();
        $dsalbum = json_encode($dsAlbum_model);
        return view('backend/album/danhsach', compact('dsalbum'));
    }

    public function Create()
    {
        return view('backend/album/_createModal');
    }

    public function Store(Request $request)
    {
        $mss = new Message(true, 'Thêm mới thành công');
        if ($request->ajax())
        {
            $url = $request->get('duongdan');
            $mota = $request->get('mota');
            $extension = pathinfo($url, PATHINFO_EXTENSION);
            $filename = str_random(4).'-'.str_slug($mota).'.'. $extension;
            //get file content from url
            $file = file_get_contents($url);
            $save = file_put_contents('upload/'.$filename, $file);
            if($save){
                //transaction......
                DB::beginTransaction();
                try {
                    $album = DB::table('Album')->insert([
                        'hinhanh' => $filename,
                        'mota' => $mota
                    ]);
                    //var_dump('file downloaded to images folder and saved to database as well.......');
                    DB::commit();
                } catch (Exception $e) {
                    //delete if no db things........
                    File::delete('upload/'. $filename);
                    DB::rollback();
                    $mss->status = false;
                    $mss->message = "Lỗi. Thêm thất bại";
                }
            }

        }
        return redirect(json_encode($mss));
    }

    public function Show($id)
    {
        //
    }

    public function Edit($id)
    {
        $album = Album::find($id);
        return view('backend/album/_editModal', compact('album'));
    }

    public function Update(Request $request)
    {
        $mss = new Message(true, 'Cập nhật thành công');
        if ($request->ajax())
        {
            $album = Album::find($request->get('id'));
            $album->mota = $request->get('mota');
            try {
            $album->save();
            }
            catch (Exception $e)
            {
                $mss->status = false;
                $mss->message = "Lỗi. Cập nhật thất bại";
            }
        }
        return response(json_encode($mss));
    }

    public function Destroy($id)
    {
        $album = Album::find($id);
        $album->delete();
        Album::destroy($id);
        $mss = new Message(true, 'Xoá thành công');
        return response(json_encode($mss));
    }
}
