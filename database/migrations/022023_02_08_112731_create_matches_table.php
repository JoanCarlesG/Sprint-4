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
        Schema::create('matches', function (Blueprint $table) {
            $table->comment('');
            $table->unsignedBigInteger('matches_id', true);
            $table->unsignedBigInteger('team1_id');
            $table->unsignedBigInteger('team2_id');
            $table->integer('goals1')->nullable();
            $table->integer('goals2')->nullable();
            $table->string('stadium', 45)->nullable();
            $table->integer('length')->nullable();
            $table->dateTime('date')->nullable();

            $table->foreign('team1_id')->references(['team_id'])->on('teams')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('team2_id')->references(['team_id'])->on('teams')->onUpdate('CASCADE')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
};
