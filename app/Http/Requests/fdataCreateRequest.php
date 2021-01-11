<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fdataCreateRequest extends FormRequest
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
            'student_id' => 'required',
            'roll_no' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'post' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
            'fathers_name' => 'required',
            'fathers_occupation' => 'required',
            'f_mobile' => 'required',
            'address' => 'required',
            'state' => 'required',
            'distt' => 'required',
            'pincode' => 'required',
            'about_us' => '',
            'what_mn' => '',
            'why_mn' => '',
            'rel_mn' => '',


        ];
    }
}
