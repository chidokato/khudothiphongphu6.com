<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $table = "tbl_home";

    public function images()
	{
		return $this->hasMany('App\images','h_id','id');
	}
	public function section()
	{
		return $this->hasMany('App\section','h_id','id');
	}

    public $timestamps = false;
}
