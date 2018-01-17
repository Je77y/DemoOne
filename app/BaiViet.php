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

    public function Ghim()
    {
        return $this->hasOne(Ghim::class, 'baivietid', 'id');
    }
}
