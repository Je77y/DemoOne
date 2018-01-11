<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BaiViet;
use App\TaiLieuDuAn;
use App\BlockContent;

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

    public function BlockContent()
    {
        return $this->hasMany(BlockContent::class, 'chudeid', 'id');
    }
}
