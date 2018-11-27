<?php

use Illuminate\Database\Seeder;

class LoginSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logins')->insert([
            'email' => str_random(10) . '@gmail.com',
            'password' => bcrypt('secret'),
            'unsubscribe_fl' => 0,
        ]);
        DB::table('logins')->insert([
            'email' => str_random(10) . '@i.softbank.jp',
            'password' => bcrypt('secret'),
            'unsubscribe_fl' => 0,
        ]);
        DB::table('logins')->insert([
            'email' => str_random(10) . '@ne.jp',
            'password' => bcrypt('secret'),
            'unsubscribe_fl' => 0,
        ]);
        DB::table('logins')->insert([
            'email' => str_random(10) . '@yahoo.co.jp',
            'password' => bcrypt('secret'),
            'unsubscribe_fl' => 0,
        ]);
        DB::table('logins')->insert([
            'email' => "sengoku_jidai_warito_suki_1600_kanashimi@ranse.com",
            'password' => bcrypt('secret'),
            'unsubscribe_fl' => 0,
        ]);
    }
}
