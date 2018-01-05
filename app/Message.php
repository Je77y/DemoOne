<?php

namespace App;

class Message
{
	public $thongbao;
    public $noidung;

    public function __construct($thongbao, $noidung)
    {
    	$this->thongbao = $thongbao;
    	$this->noidung = $noidung;
    }
}
