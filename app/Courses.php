<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
           'course_name',
           'place',
           'StartDate',
           'FinishDate',
           'detailes',
           ];
}
