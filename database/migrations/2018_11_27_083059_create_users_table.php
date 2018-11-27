<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $default_user_name = "ゲスト";
            $default_room_no = 0000;
            $default_user_pic = "/images/logo1.png";
            $table->increments('user_id');
            $table->string('user_name', 255)->default($default_user_name);
            $table->integer('room_no')->default($default_room_no);
            $table->string('user_pic', 100)->default($default_user_pic);
            $table->dateTime('user_modified')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->foreign('user_id')->references('login_id')->on('logins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
