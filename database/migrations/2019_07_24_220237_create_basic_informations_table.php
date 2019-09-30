<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('street');
            $table->integer('number_of_home');
            $table->integer('number_of_building');
            $table->integer('post_code');
            $table->string('city');
            $table->integer('phone_number');
            $table->string('email');
            $table->date('date_of_birth');
            $table->text('goal');
            $table->text('image');
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basic_informations');
    }
}
