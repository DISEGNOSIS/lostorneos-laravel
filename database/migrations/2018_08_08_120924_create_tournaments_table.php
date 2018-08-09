<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('information')->nullable();
            $table->string('image')->nullable();
            $table->float('price', 9, 2)->nullable();
            $table->float('prize', 13, 2)->nullable();
            $table->unsignedInteger('game_id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('user_id');
            $table->boolean('featured')->nullable();
            $table->timestamp('start');
            $table->timestamp('end');
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
        Schema::dropIfExists('tournaments');
    }
}
