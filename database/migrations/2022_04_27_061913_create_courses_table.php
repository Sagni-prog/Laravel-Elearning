<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('course_id');
            $table->unsignedinteger('teacher_id');
            $table->unsignedinteger('course_no');
            $table->string('course_name');
            $table->string('course_catagory');
            $table->mediumText('course_description');
            $table->longText('course_detail');
            $table->string('course_thumb');
            $table->string('course_intro');
            $table->unsignedinteger('courseChecked');
            $table->string('course_fee');
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
        Schema::dropIfExists('courses');
    }
};
