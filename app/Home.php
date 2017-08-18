<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function SendingHome()
    {
    	return $this->belongsTo('App\SendingHome');
    }

    public function ReceivingHome()
    {
    	return $this->belongsTo('App\ReceivingHome');
    }

    public function Lights()
    {
    	return $this->hasMany('App\Light');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($home) { // before delete() method call this
             $home->SendingHome()->delete();
             $home->ReceivingHome()->delete();
             $home->Lights()->delete();
        });
    }
}
