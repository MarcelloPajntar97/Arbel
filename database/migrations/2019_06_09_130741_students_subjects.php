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
      $table->bigIncrements('id');
      $table->unsignedBigInteger('sub_id')->nullable();
      $table->unsignedBigInteger('stud_id')->nullable();
      $table->foreign('sub_id')->references('id')->on('subjects')->onDelete('cascade');
      $table->foreign('stud_id')->references('id')->on('students')->onDelete('cascade');
      $table->integer('mark')->default(0);
      $table->integer('avereage')->nullable();
      $table->float('absence_hours')->default(0);
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
      Schema::dropIfExists('students_subjects');
    }
}
