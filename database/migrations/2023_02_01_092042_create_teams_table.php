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
        Schema::create('teams', function (Blueprint $table) {
            $table->comment('');
            $table->integer('team_id', true);
            $table->string('name', 45)->nullable();
            $table->string('home_city', 45)->nullable();
            $table->string('stadium', 45)->nullable();
            $table->integer('user_id')->index('fk_team_user_idx');
            $table->binary('crest')->nullable();

            $table->primary(['team_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
