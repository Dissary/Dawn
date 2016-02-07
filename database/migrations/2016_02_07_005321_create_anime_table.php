<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('altname');
            $table->timestamp('released');
            $table->text('description');
            $table->char('imageurl', 255);
            $table->char('headerimg_url', 255);
            $table->integer('episodes');
            $table->integer('episodes_duration');
            $table->string('categories');
            $table->string('tags');
            $table->string('studio');
            $table->integer('mal_id');
            $table->char('op_yt_id', 11);
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
        Schema::drop('animes');
    }
}
