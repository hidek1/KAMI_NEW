<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_details', function (Blueprint $table) {
            $table->increments('detail_id');
            $table->integer('max')->default(0);
            $table->integer('min')->default(0);
            $table->text('invite')->nullable();
            $table->text('detail')->nsullable();
            $table->integer('price')->default(0);
            $table->tinyInteger('graduation_fl')->default(0);
            $table->tinyInteger('teachers_fl')->default(0);
            $table->dateTime('detail_modified')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->foreign('detail_id')->references('event_id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_details');
    }
}
