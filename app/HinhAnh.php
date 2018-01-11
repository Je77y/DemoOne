<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlockContent;

class HinhAnh extends Model
{
    protected $table = "HinhAnhBlock";

    public function BlockContent()
    {
        return $this->belongsTo(BlockContent::class, 'blockid', 'id');
    }
}

