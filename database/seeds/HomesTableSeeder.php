<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homes = [
        	[
        		"id" => 1,
        		"receiving_home_id" => 1,
        		"sending_home_id" => 1,
                "user_id" => 1,
                "name" => "Tom & Sam's iHome",
                "password" => "test",
        	],
            [
                "id" => 2,
                "receiving_home_id" => 1,
                "sending_home_id" => 1,
                "user_id" => 2,
                "name" => "Tom & Sam's iHome",
                "password" => "test",
            ],
        ];

        $receiving_homes = [
        	[
        		"id" => 1,
        		"name" => "Sam's House",
        		"location" => "Kruibeke",
                // "home_id" => 1
        	],
        ];

        $sending_homes = [
        	[
        		"id" => 1,
        		"name" => "Tom's House",
        		"location" => "Melbourne",
                // "home_id" => 2
        	],
        ];

        $lights = [
        	[
        		"id" => 1,
        		"home_id" => 1,
        		"color" => "white",
        		"time" => 50,
        		"started" => Carbon::now(),
                "stopped" => Carbon::now(),
                "message" => "Ik ben thuis!",
        	],
        	[
        		"id" => 2,
        		"home_id" => 1,
        		"color" => "green",
        		"time" => 50,
        		"started" => Carbon::now(),
                "stopped" => Carbon::now(),
                "message" => "Heb je zin om te skypen?",
        	],
        	[
        		"id" => 3,
        		"home_id" => 1,
        		"color" => "orange",
        		"time" => 50,
        		"started" => Carbon::now(),
                "stopped" => Carbon::now(),
                "message" => "We zijn over 10 minuten terug thuis.",
        	],
        	[
        		"id" => 4,
        		"home_id" => 1,
        		"color" => "red",
        		"time" => 50,
        		"started" => Carbon::now(),
                "stopped" => Carbon::now(),
                "message" => "Ben op deze moment even niet bereikbaar.",
        	],
        ];

        DB::table('homes')->insert($homes);
        DB::table('receiving_homes')->insert($receiving_homes);
        DB::table('sending_homes')->insert($sending_homes);
        DB::table('lights')->insert($lights);
    }
}
