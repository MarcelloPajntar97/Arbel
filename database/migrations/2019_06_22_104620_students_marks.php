<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsMarks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_marks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sub_id')->nullable();
            $table->unsignedBigInteger('stud_id')->nullable();
            $table->foreign('sub_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('stud_id')->references('id')->on('students')->onDelete('cascade');
            $table->integer('mark');
            $table->string('tipology');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_marks');
    }
}
