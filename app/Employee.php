<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     protected $fillable = [

    	'id',
    	'first_name',
    	'last_name',
    	'address',
    	'phone',
    	'gender',
    	'email',
    	'image',
    	'date_of_birth',
    	'hire_date',
    	'role_id'

    ];

      public function role() {
        return $this->belongsTo('App\Role');
    }
}
