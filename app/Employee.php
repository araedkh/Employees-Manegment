<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
           'documentType',
           'documentNumber',
           'fullName',
           'name',
           'dataOfBirth',
           'socialState',
           'gender',
           'phoneNumber',
           'wataniaMobile',
           'Tel',
           'country',
           'city',
           'address',
           'jobNumber',
           'startDate',
        ];
}
