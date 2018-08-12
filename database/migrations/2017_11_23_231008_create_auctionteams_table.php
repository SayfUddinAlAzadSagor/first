<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctionteams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo');
            $table->text('description');
            $table->integer('tournament_id')->nullable();
              // $table->integer('profile_id')->unsigned()->index();
            // $table->integer('schedule_id')->unsigned()->index();
            // $table->integer('result_id')->unsigned()->index();
            // $table->integer('manager_id')->unsigned()->index();
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
        Schema::dropIfExists('auctionteams');
    }
}
