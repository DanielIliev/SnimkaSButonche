<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
	use \Venturecraft\Revisionable\RevisionableTrait;
	public static function boot() { parent::boot(); }
	
    public $timestamps = false;
}
