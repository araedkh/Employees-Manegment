<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
   protected $fillable = [
           'workPlace',
           'jobTitle',
           'StartDate',
           'FinishDate',
           'salary',
           'currency',
           'detailes',
           
        ];
}
