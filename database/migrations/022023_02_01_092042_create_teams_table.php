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
            $table->unsignedBigInteger('team_id', true);
            $table->string('name', 45)->nullable();
            $table->string('home_city', 45)->nullable();
            $table->string('stadium', 45)->nullable();
            $table->string('crest')->nullable();
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references(['user_id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');

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
