<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ChuDe;

class BaiViet extends Model
{
    protected $table = "BaiViet";

    public function ChuDe()
    {
        return $this->belongsTo(ChuDe::class, 'chudeid', 'id');
    }
}
