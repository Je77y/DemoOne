<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LoaiBlock;

class BlockContent extends Model
{
    protected $table = "BlockContent";

    public function LoaiBlock()
    {
        return $this->belongsTo(LoaiBlock::class, 'loaiblockid', 'id');
    }

}
