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
            $table->integer('matches_id', true);
            $table->integer('team1_id')->index('fk_team_has_team_team1_idx');
            $table->integer('team2_id')->index('fk_team_has_team_team2_idx');
            $table->integer('goals1')->nullable();
            $table->integer('goals2')->nullable();
            $table->string('stadium', 45)->nullable();
            $table->integer('length')->nullable();
            $table->dateTime('date')->nullable();

            $table->primary(['matches_id','team1_id', 'team2_id']);
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
