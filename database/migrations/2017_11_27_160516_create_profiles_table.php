<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->string('registration_no');
            $table->string('rating');
            $table->string('jarsey_no');
            $table->string('batch');
            $table->string('image');
            $table->string('position');
            $table->text('description');
            $table->integer('batchteam_id')->unsigned()->index();
            $table->integer('auctionteam_id')->unsigned()->index();
            // $table->integer('result_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('batchteam_id')->references('id')->on('batchteams');
            $table->foreign('auctionteam_id')->references('id')->on('auctionteams');
        //     $table->foreign('result_id')->references('id')->on('results');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
