<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->string('batch');
           $table->string('image');
           $table->text('description');
           $table->integer('auctionteam_id')->unsigned()->index();
           $table->integer('batchteam_id')->unsigned()->index();
           $table->timestamps();

          $table->foreign('auctionteam_id')->references('id')->on('auctionteams');
          $table->foreign('batchteam_id')->references('id')->on('batchteams');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('managers');
    }
}
