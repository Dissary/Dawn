<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimelistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animelists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner_name');
            $table->text('watched_anime');
            $table->text('planned_anime');
            $table->text('held_anime');
            $table->text('dropped_anime');
            $table->text('watching_anime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('animelists');
    }
}
