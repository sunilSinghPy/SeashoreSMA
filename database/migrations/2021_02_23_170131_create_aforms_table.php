<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aforms', function (Blueprint $table) {
            $table->id();

            $table->string('rollNo');
            $table->string('course');
            $table->string('name');
            $table->string('dOb');
            $table->string('isMedicalFit');
            $table->string('fatherName');
            $table->string('fatherOccupation');
            $table->string('motherName');
            $table->string('motherOccupation');
            $table->string('gender');
            $table->string('email');
            $table->string('houseNo');
            $table->string('landmark');
            $table->string('city')->nullable();
            $table->string('tehsil');
            $table->string('postoffice')->nullable();
            $table->string('distt');
            $table->string('state');
            $table->string('pincode');
            $table->string('mobile');
            $table->string('mobile1');
            $table->string('mSub');
            $table->string('mUni');
            $table->string('mYoP');
            $table->string('mPer');
            $table->string('iSub');
            $table->string('iUni');
            $table->string('iYoP');
            $table->string('iPer');
            $table->string('gSub');
            $table->string('gUni');
            $table->string('gYoP');
            $table->string('gPer');
            $table->string('pSub');
            $table->string('pUni');
            $table->string('pYoP');
            $table->string('pPer');
            $table->string('height');
            $table->string('weight');
            $table->string('eyeVision');
            $table->string('colorBlindness');
            $table->text('identificationMark');
            $table->text('languageKnown');
            $table->text('photoImg')->nullable();
            $table->text('signImg')->nullable();



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
        Schema::dropIfExists('aforms');
    }
}
