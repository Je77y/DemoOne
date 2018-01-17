<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghim extends Model
{
    protected $table = "Ghim";

    public function BaiViet()
    {
        return $this->belongsTo(BaiViet::class, 'baivietid', 'id');
    }
}
