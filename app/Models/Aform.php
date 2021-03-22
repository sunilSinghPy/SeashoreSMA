<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aform extends Model
{
    use HasFactory;
    protected $fillable = [

       'registrationDate',
        'rollNo',
        'course',
        'name',
        'dOb',
        'isMedicalFit',
        'fatherName',
        'fatherOccupation',
        'motherName',
        'motherOccupation',
        'gender',
        'email',
        'houseNo',
        'landmark',
        'city',
        'tehsil',
        'postoffice',
        'distt',
        'state',
        'pincode',
        'mobile',
        'mobile1',
        'mSub',
        'mUni',
        'mYoP',
        'mPer',
        'iSub',
        'iUni',
        'iYoP',
        'iPer',
        'gSub',
        'gUni',
        'gYoP',
        'gPer',
        'pSub',
        'pUni',
        'pYoP',
        'pPer',
        'height',
        'weight',
        'eyeVision',
        'colorBlindness',
        'identificationMark',
        'languageKnown',
        'photoImg',

   ];

}
