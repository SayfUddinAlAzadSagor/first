<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_1');
            $table->string('team_2');
            $table->integer('goal_1');
            $table->integer('goal_2');
            $table->text('datetime');
            $table->boolean('check');
            $table->text('description');
            $table->integer('tournament_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('tournament_id')->references('id')->on('tournaments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
