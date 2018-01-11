<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LoaiBlock;
use App\ChuDe;

class BlockContent extends Model
{
    protected $table = "BlockContent";

    public function LoaiBlock()
    {
        return $this->belongsTo(LoaiBlock::class, 'loaiblockid', 'id');
    }

    public function ChuDe()
    {
        return $this->belongsTo(ChuDe::class, 'chudeid', 'id');
    }

    public function HinhAnh()
    {
        return $this->hasMany(HinhAnh::class, 'blockid', 'id');
    }
}
