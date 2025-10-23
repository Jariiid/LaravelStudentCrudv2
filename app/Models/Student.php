<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'student_number',
        'email',
    ];
}
