<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Appointment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('id_file');
            $table->string('pohne_number');
            $table->string('appoetment_with');
            $table->string('sex');
            $table->string('date_of_birth');
            $table->string('date');
            $table->string('is_c');
            $table->integer('user_id')->unsigned();//الشخص الي دخل البيانات
            $table->integer('nationality_id')->unsigned();//الشخص الي دخل البيانات
            $table->integer('orginzations_id')->unsigned();//الشخص الي دخل البيانات
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('nationality_id')->references('id')->on('nationality')->onDelete('cascade');
            $table->foreign('orginzations_id')->references('id')->on('orginzation')->onDelete('cascade');

         });
    }
 
  
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');

    }
}
