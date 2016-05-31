<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //



	public function offices()
	{
		return $this->belongsToMany('App\Office', 'contact_office_jn')->orderBy('sort', 'asc');
	}











}
