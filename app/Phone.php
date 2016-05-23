<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public $timestamps = false;

    public function Owner()
    {
        return $this->belongsTo('App\Owner');
    }
}
