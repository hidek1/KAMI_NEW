<?php

use Illuminate\Database\Seeder;

class EventRelationSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_relations')->insert([
            'event_id' => 1,
            'user_id' => 1,
            'relation_fl' => 0,
        ]);
        DB::table('event_relations')->insert([
            'event_id' => 3,
            'user_id' => 1,
            'relation_fl' => 1,
        ]);
        DB::table('event_relations')->insert([
            'event_id' => 1,
            'user_id' => 2,
            'relation_fl' => 1,
        ]);
        DB::table('event_relations')->insert([
            'event_id' => 4,
            'user_id' => 3,
            'relation_fl' => 1,
        ]);
        DB::table('event_relations')->insert([
            'event_id' => 5,
            'user_id' => 1,
            'relation_fl' => 0,
        ]);
        // 遊び心のイナサル
        DB::table('event_relations')->insert([
            'event_id' => 2,
            'user_id' => 1,
            'relation_fl' => 1,
        ]);
        DB::table('event_relations')->insert([
            'event_id' => 2,
            'user_id' => 2,
            'relation_fl' => 1,
        ]);
        DB::table('event_relations')->insert([
            'event_id' => 2,
            'user_id' => 3,
            'relation_fl' => 1,
        ]);
        DB::table('event_relations')->insert([
            'event_id' => 2,
            'user_id' => 4,
            'relation_fl' => 1,
        ]);
        DB::table('event_relations')->insert([
            'event_id' => 2,
            'user_id' => 5,
            'relation_fl' => 1,
        ]);
    }
}
