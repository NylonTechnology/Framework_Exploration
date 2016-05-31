<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    //





	public function tasks()
	{
		return $this->belongsToMany('App\Contact');
	}





}
