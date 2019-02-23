<?php

use Illuminate\Database\Seeder;

class EventSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'organizer_id' => 1,
            'event_name' => str_random(10),
            'start' => date('2022/01/01 H:i:s'),
            'event_place' => str_random(10),
            'event_pic' => "images/ERxM8s8f.jpg",
            'meet_time' => date('Y/m/d H:i:s'),
            'meet_place' => str_random(10),
            'answer_limit' => date('2022/01/01 H:i:s'),
        ]);
        DB::table('events')->insert([
            'organizer_id' => 5,
            'event_name' => "イナサルパーティ",
            'start' => date('2022/01/01 H:i:s'),
            'event_place' => "イナサル",
            'event_pic' => "images/ERQEVp68.jpg",
            'meet_time' => date('2022/01/01 H:i:s'),
            'meet_place' => "ロビー",
            'answer_limit' => date('2022/01/01 H:i:s'),
        ]);
        DB::table('events')->insert([
            'organizer_id' => 3,
            'event_name' => "大阪万博",
            'start' => date('2025/01/01 H:i:s'),
            'event_place' => "大阪万博会場",
            'event_pic' => "images/m3DTtQcT.jpg",
            'meet_time' => date('2025/01/01 H:i:s'),
            'meet_place' => str_random(10),
            'answer_limit' => date('2025/01/01 H:i:s'),
        ]);
        DB::table('events')->insert([
            'organizer_id' => 4,
            'event_name' => str_random(10),
            'start' => date('Y/m/d H:i:s'),
            'event_place' => str_random(10),
            'event_pic' => "images/PRuYjgZO.jpg",
            'meet_time' => date('Y/m/d H:i:s'),
            'meet_place' => str_random(10),
            'answer_limit' => date('Y/m/d H:i:s'),
        ]);
        DB::table('events')->insert([
            'organizer_id' => 2,
            'event_name' => str_random(10),
            'start' => date('Y/m/d H:i:s'),
            'event_place' => str_random(10),
            'event_pic' => "images/bpsVEecs.jpg",
            'meet_time' => date('Y/m/d H:i:s'),
            'meet_place' => str_random(10),
            'answer_limit' => date('Y/m/d H:i:s'),
        ]);
    }
}
