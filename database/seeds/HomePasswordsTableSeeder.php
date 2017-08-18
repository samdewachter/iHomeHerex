<?php

use Illuminate\Database\Seeder;

class HomePasswordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home_passwords = [
        	[
        		"id" => 1,
        		"password" => "test",
        	],
        ];

        DB::table('home_passwords')->insert($home_passwords);
    }
}
