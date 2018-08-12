<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batchteams', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name');
             $table->string('batch');
            $table->string('logo');
            $table->text('description');
            $table->integer('tournament_id')->nullable();
            // $table->integer('profile_id')->unsigned();
            // $table->integer('schedule_id')->unsigned();
            // $table->integer('result_id')->unsigned();
            // $table->integer('manager_id')->unsigned();
             $table->timestamps();
            

            // $table->foreign('profile_id')->references('id')->on('profiles');
            // $table->foreign('schedule_id')->references('id')->on('schedules');
            // $table->foreign('result_id')->references('id')->on('results');
            // $table->foreign('manager_id')->references('id')->on('managers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batch_teams');
    }
}
