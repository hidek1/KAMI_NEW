<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('event_user', function (Blueprint $table) {
        $table->unsignedInteger('user_id')->index();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->unsignedInteger('event_id')->index();
        $table->foreign('event_id')->references('id')->on('event')->onDelete('cascade');
        $table->dateTime('event_created')->default(DB::raw('CURRENT_TIMESTAMP'));
        $table->dateTime('user_modified')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
        // Schema::create('event_relations', function (Blueprint $table) {
        //     $table->integer('user_id')->unsigned();
        //     $table->integer('event_id')->unsigned();
        //     $table->tinyInteger('relation_fl')->default(0);
        //     $table->dateTime('relation_created')->default(DB::raw('CURRENT_TIMESTAMP'));
        //     $table->dateTime('relation_modified')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        //     $table->foreign('user_id')->references('user_id')->on('users'); //外部キー参照
        //     $table->foreign('event_id')->references('event_id')->on('events'); //外部キー参照
        // });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_relations');
    }
}
