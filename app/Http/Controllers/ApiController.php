<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function post(Request $request, $hash)
    {
    	$home = Home::where('password', $hash)->first();

    	switch ($request->light) {
    		case 1:
    			$newLight = $home->Lights->where('color', 'white')->first();
    			$newLight->started = Carbon::now();
    			$newLight->save();
    			break;

    		case 2:
    			$newLight = $home->Lights->where('color', 'green')->first();
    			$newLight->started = Carbon::now();
    			$newLight->save();

    			$oldLight = $home->Lights->where('color', 'white')->first();
    			$oldLight->stopped = Carbon::now();
    			$oldLight->time = ($oldLight->stopped - $oldLight->started);
    			$oldLight->save();
    			break;

    		case 3:
    			$newLight = $home->Lights->where('color', 'orange')->first();
    			$newLight->started = Carbon::now();
    			$newLight->save();

    			$oldLight = $home->Lights->where('color', 'green')->first();
    			$oldLight->stopped = Carbon::now();
    			$oldLight->time = ($oldLight->stopped - $oldLight->started);
    			$oldLight->save();
    			break;

    		case 4:
    			$newLight = $home->Lights->where('color', 'red')->first();
    			$newLight->started = Carbon::now();
    			$newLight->save();

    			$oldLight = $home->Lights->where('color', 'orange')->first();
    			$oldLight->stopped = Carbon::now();
    			$oldLight->time = ($oldLight->stopped - $oldLight->started);
    			$oldLight->save();
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }
}
