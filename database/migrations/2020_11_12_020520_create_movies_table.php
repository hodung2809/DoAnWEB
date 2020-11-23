<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->integer("movie_type_id")->unsigned()->index();
            $table->integer("country_id")->unsigned()->index();
            $table->foreign("movie_type_id")->references("id")->on("movie_types");
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string("director");
            $table->time("length");
            $table->date("opening_day");
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
        Schema::dropIfExists('movies');
    }
}
