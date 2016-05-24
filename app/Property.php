<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	use \Venturecraft\Revisionable\RevisionableTrait;
	public static function boot() { parent::boot(); }

    public $timestamps = false;

    public function Owner()
    {
    	return $this->belongsTo('App\Owner');
    }

    public function Calls()
	{
		return $this->hasMany('App\CallLog');
	}
}
