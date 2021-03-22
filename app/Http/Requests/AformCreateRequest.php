<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AformCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [


            'rollNo' =>'required',
            'course'=> 'required',
            'name'=> 'required',
            'dOb'=> 'required',
            'isMedicalFit'=> 'required',
            'fatherName'=> 'required',
            'fatherOccupation'=> 'required',
            'motherName'=> 'required',
            'motherOccupation'=> 'required',
            'gender'=> 'required',
            'email'=> 'required',
            'houseNo'=> 'required',
            'landmark'=> 'required',
            'city'=> '',
            'tehsil'=> 'required',
            'postoffice'=> '',
            'distt' => 'required',
            'state'=> 'required',
            'pincode'=> 'required',
            'mobile'=> 'required',
            'mobile1'=> 'required',
            'mSub'=> 'required',
            'mUni'=> 'required',
            'mYoP'=> 'required',
            'mPer'=> 'required',
            'iSub'=> 'required',
            'iUni'=> 'required',
            'iYoP'=> 'required',
            'iPer'=> 'required',
            'gSub'=> 'required',
            'gUni'=> 'required',
            'gYoP'=> 'required',
            'gPer'=> 'required',
            'pSub'=> 'required',
            'pUni'=> 'required',
            'pYoP'=> 'required',
            'pPer'=> 'required',
            'height'=> 'required',
            'weight'=> 'required',
            'eyeVision'=> 'required',
            'colorBlindness'=> 'required',
            'identificationMark'=> 'required',
            'languageKnown'=> 'required',
            'photoImg'=> '',
        ];
    }
}
