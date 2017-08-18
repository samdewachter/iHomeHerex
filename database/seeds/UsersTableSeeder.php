<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	[
        		"id" => 1,
        		"name" => "Sam De Wachter",
        		"email" => "samdewachter@hotmail.com",
        		"password" => Hash::make('test'),
                "place_of_residence" => "Kruibeke",
                "created_at" => Carbon::now(),
        	],
        	[
        		"id" => 2,
        		"name" => "Tom De Wachter",
        		"email" => "tomdewachter@hotmail.com",
        		"password" => Hash::make('test'),
                "place_of_residence" => "Melbourne",
                "created_at" => Carbon::now(),
        	],
        ];

        DB::table('users')->insert($users);
    }
}
