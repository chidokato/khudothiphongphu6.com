<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table = "tbl_img";

	public function home()
	{
		return $this->belongsTo('App\home','h_id','id');
	}

    public $timestamps = false;
}
