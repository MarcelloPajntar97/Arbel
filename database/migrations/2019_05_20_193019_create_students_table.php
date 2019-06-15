<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('class_id')->nullable();;
            $table->foreign('class_id')->references('id')->on('classes');
            $table->integer('badgeNumber');
            $table->integer('bursary')->nullable();
            $table->string('userPicture')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->date('birthday');
            $table->string('sex');
            $table->string('email');
            $table->longText('details')->nullable();
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
        Schema::dropIfExists('students');
    }
}
