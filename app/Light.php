<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Light extends Model
{
    public function Home()
    {
    	return $this->belongsTo('App\Home');
    }
}
