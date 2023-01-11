<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_players', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('slug')->unique();
            $table->string('status')->nullable();
            $table->string('result')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('code')->unique()->nullable();
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
        Schema::dropIfExists('game_players');
    }
};
