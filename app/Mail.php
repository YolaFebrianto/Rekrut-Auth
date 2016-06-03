<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    public function mailcontent()
    {
    	return $this->belongsTo('App\User')
    }
}
