<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendingHome extends Model
{
    public function Homes()
    {
    	return $this->hasMany('App\Home');
    }

    public function User()
    {
    	return $this->belongsTo('App\User');
    }

    public function Lights()
    {
    	return $this->hasMany('App\Light');
    }
}
