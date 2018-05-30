<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id',
        'name',
        'admission_date',
        'email',
        'faculty',
        'major',
        'country'
    ];
}
