<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
	use \Venturecraft\Revisionable\RevisionableTrait;
	public static function boot() { parent::boot(); }
	
	public $timestamps = false;
	
	public function Properties()
	{
		return $this->hasMany('App\Property');
	}

	public function Phones()
	{
		return $this->hasMany('App\Phone');
	}


}
