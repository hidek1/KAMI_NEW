<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id');
            $table->integer('organizer_id')->unsigned();
            $table->string('event_name', 255);
            $table->dateTime('start');
            $table->string('event_place', 255);
            $table->string('event_pic', 100);
            $table->dateTime('meet_time');
            $table->string('meet_place', 255);
            $table->dateTime('answer_limit');
            $table->dateTime('event_created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('event_modified')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->foreign('organizer_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
