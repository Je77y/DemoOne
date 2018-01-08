<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "Album";

    public function delete()
    {
        if(file_exists('upload/'.$this->hinhanh)){
            @unlink('upload/'.$this->hinhanh);
        }
        parent::delete();
    }
}
