<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('participant_id')->unsigned();
            $table->integer('challenge_id')->unsigned();

            $table->foreign('participant_id')->references('id')->on('participants');
            $table->foreign('challenge_id')->references('id')->on('challenges');


            $table->integer("line_number");
            $table->text('comment');

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
        Schema::dropIfExists('submissions');
    }
}
