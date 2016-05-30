<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallLog extends Model
{
    public function Propetry()
    {
    	return $this->belongsTo('App\Property');
    }
}
