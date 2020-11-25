<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screenings', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("movie_id")->unsigned()->index();
            $table->integer("cinema_id")->unsigned()->index();
            $table->foreign("movie_id")->references("id")->on("movies");
            $table->foreign("cinema_id")->references("id")->on("cinemas");
            $table->time("time");
            $table->boolean("status");
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
        Schema::dropIfExists('screenings');
    }
}