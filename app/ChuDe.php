<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaiViet;

class ChuDe extends Model
{
    protected $table = "ChuDe";

    public function BaiViet()
    {
        return $this->hasMany(BaiViet::class, 'chudeid', 'id');
    }
    public function TaiLieuDuAn()
    {
        return $this->hasMany(TaiLieuDuAn::class, 'chudeid', 'id');
    }
}
