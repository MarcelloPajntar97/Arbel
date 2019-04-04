<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('students_subjects', function (Blueprint $table) {
      $table->unsignedBigInteger('sub_id');
      $table->unsignedBigInteger('stud_id');
      $table->foreign('sub_id')->references('id')->on('students')->onDelete('cascade');
      $table->foreign('stud_id')->references('id')->on('subjects')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('students_subjects');
    }
}
