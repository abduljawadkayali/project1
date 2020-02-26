<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->Increments('id');

            $table->integer('student_id')->unsigned()->index();
            $table->foreign('student_id')->references('id')->on('students');

            $table->integer('year_id')->unsigned();
            $table->foreign('year_id')->references('id')->on('years');  
            
            $table->integer('semister_id')->unsigned();
            $table->foreign('semister_id')->references('id')->on('semisters');  

            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exams');

            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');  

            $table->integer('degree');
            
            $table->softDeletes();

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
        Schema::dropIfExists('results');
    }
}
