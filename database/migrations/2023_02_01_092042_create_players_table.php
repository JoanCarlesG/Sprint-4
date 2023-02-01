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
        Schema::create('players', function (Blueprint $table) {
            $table->comment('');
            $table->integer('player_id', true);
            $table->string('name', 45)->nullable();
            $table->string('surname', 45)->nullable();
            $table->string('number', 45)->nullable();
            $table->string('position', 45)->nullable();
            $table->integer('team_id')->index('fk_player_team1_idx');

            $table->primary(['player_id', 'team_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
