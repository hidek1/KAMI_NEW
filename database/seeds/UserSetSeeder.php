<?php

use Illuminate\Database\Seeder;

class UserSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => str_random(10),
            'room_no' => "815",
            'user_pic' => "/images/" . str_random(8) . ".png",
        ]);
        DB::table('users')->insert([
            'user_name' => str_random(10),
            'room_no' => "1016",
            'user_pic' => "/images/" . str_random(8) . ".png",
        ]);
        DB::table('users')->insert([
            'user_name' => str_random(10),
            'room_no' => "11931124",
            'user_pic' => "/images/" . str_random(8) . ".png",
        ]);
        DB::table('users')->insert([
            'user_pic' => "/images/" . str_random(8) . ".png",
        ]);
        DB::table('users')->insert([
            'user_name' => "織田信長",
            'room_no' => "1582",
            'user_pic' => "/images/" . str_random(8) . ".png",
        ]);
    }
}
