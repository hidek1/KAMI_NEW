<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LoginSetSeeder::class,
        ]);
        $this->call([
            UserSetSeeder::class,
        ]);
        $this->call([
            EventSetSeeder::class,
        ]);
        $this->call([
            EventDetailSetSeeder::class,
        ]);
        $this->call([
            EventRelationSetSeeder::class,
        ]);

    }
}
