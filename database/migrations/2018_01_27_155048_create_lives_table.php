<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_1');
            $table->string('team_2');
            $table->integer('goal_1');
            $table->integer('goal_2');
            $table->string('logo_1');
            $table->string('logo_2');
            $table->string('timeleft');
            $table->text('stream');
            $table->text('description_1');
            $table->text('description_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lives');
    }
}
