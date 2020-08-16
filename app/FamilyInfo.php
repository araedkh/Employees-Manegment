<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyInfo extends Model
{
    protected $fillable = [
    	'fullname',
    	'idNumber',
    	'relation',
    	'DateOfBirth',
    	'socialstatus',
    	'does he study ?',
    	'does he work ?',
    	'IDImage',
 ];
}
