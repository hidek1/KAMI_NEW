<?php

use Illuminate\Database\Seeder;

class EventDetailSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_details')->insert([
            'max' => 200,
            'min' => 100,
            'invite' => str_random(8),
            'detail' => str_random(20),
            'price' => 1980,
            'graduation_fl' => 0,
            'teachers_fl' => 0,
        ]);
        DB::table('event_details')->insert([
            'max' => 800,
            'min' => 250,
            'invite' => "みんなでかかってこい",
            'detail' => "いいなぁ、懐かしいな、たべたいな、日本にできないかな、お土産にたのもうかな、ツナ缶でフィッシュシシグ作れるかな",
            'price' => 10000,
            'graduation_fl' => 0,
            'teachers_fl' => 0,
        ]);
        DB::table('event_details')->insert([
            'max' => 5,
            'min' => 0,
            'invite' => str_random(8),
            'detail' => str_random(20),
            'price' => 1980,
            'graduation_fl' => 1,
            'teachers_fl' => 0,
        ]);
        DB::table('event_details')->insert([
            'max' => 200,
            'min' => 100,
            'invite' => str_random(40),
            'detail' => str_random(100),
            'price' => 1980,
            'graduation_fl' => 0,
            'teachers_fl' => 1,
        ]);
        DB::table('event_details')->insert([
            'invite' => "未設定",
            'detail' => "未設定",
        ]);
    }
}
