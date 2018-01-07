<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlockContent;

class LoaiBlock extends Model
{
    protected $table = "LoaiBlock";

    public function BlockContent()
    {
        return $this->hasMany(BlockContent::class, 'loaiblockid', 'id');
    }
}
