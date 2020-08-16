<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualif extends Model
{
    protected $fillable = [
    	'qualification',
    	'university',
    	'major',
    	'majorHistory',
    	'detailes',

      ];
}
