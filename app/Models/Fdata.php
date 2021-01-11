<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fdata extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'roll_no',
        'first_name',
        'last_name',
        'post',
        'email',
        'dob',
        'gender',
        'mobile',
        'fathers_name',
        'fathers_occupation',
        'f_mobile',
        'address',
        'state',
        'distt',
        'pincode',
        'about_us',
        'what_mn',
        'why_mn',
        'rel_mn',
        'student_id'
    ];
public function student(){
    return $this->belongsTo(Student::class);
}


}
