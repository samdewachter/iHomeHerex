<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Home;
use App\Light;
use App\ReceivingHome;
use App\SendingHome;


class TestController extends Controller
{
    public function test()
    {
    	$data = User::find(1);

    	var_dump($data->Homes[0]);
    }
}
