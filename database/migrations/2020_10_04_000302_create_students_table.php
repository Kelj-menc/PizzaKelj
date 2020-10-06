<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('grade');
            $table->text('used_comments');
            $table->text('about_student');
            //gender:Female, Male, Others
            $table->string('gender');
            //categories: Introduction, Behavior, Speaking, Reading, Writing, Listening, Comprehension, Subject, Conclusion	
            $table->json('categories');
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
