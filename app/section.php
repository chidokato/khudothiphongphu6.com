<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    protected $table = "tbl_section";

	public function home()
	{
		return $this->belongsTo('App\home','h_id','id');
	}

    public $timestamps = false;
}
