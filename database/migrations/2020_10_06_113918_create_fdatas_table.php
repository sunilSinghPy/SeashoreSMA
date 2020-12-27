<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('roll_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('post');
            $table->string('email');
            $table->string('dob');
            $table->string('gender');
            $table->string('mobile');
            $table->string('fathers_name');
            $table->string('fathers_occupation');
            $table->string('f_mobile');
            $table->string('address');
            $table->string('state');
            $table->string('distt');
            $table->string('pincode');
            $table->text('about_us')->nullable();
            $table->text('what_mn')->nullable();
            $table->text('why_mn')->nullable();
            $table->text('rel_mn')->nullable();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');




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
        Schema::dropIfExists('fdatas');
    }
}
