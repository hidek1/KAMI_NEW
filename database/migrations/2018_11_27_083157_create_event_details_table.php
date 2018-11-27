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
            $default = "未設定";
            $table->increments('detail_id');
            $table->string('max', 10)->default($default);
            $table->string('min', 10)->default($default);
            $table->text('invite')->nullable();
            $table->text('detail')->nullable();
            $table->string('price', 10)->default($default);
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
