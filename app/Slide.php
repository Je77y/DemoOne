<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = "Slide";

    protected $dates = ['ngaybatdau', 'ngayketthuc'];

//    protected $dateFormat = 'U';
}
