<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('drive_id')->unsigned();
            $table->foreign('drive_id')->references('id')->on('drives');
            $table->integer('tmdb_id')->unsigned()->unique()->nullable();
            $table->string('title');
            $table->integer('year');
            $table->string('certification')->nullable();
            $table->string('sort_title')->nullable();
            $table->date('release_date')->nullable();
            $table->integer('runtime')->nullable();
            $table->float('rating', 9, 6)->nullable();
            $table->float('popularity', 9, 6)->nullable();
            $table->integer('budget')->nullable();
            $table->integer('revenue')->nullable();
            $table->string('tagline')->nullable();
            $table->text('summary')->nullable();
            $table->string('poster')->nullable();
            $table->string('cover')->nullable();
            $table->string('location')->unique();
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
