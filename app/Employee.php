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
    	'join_date',
    	'role_id'

    ];

    protected $uploads = '/images/';


    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }

      public function role() {
        return $this->belongsTo('App\Role');
    }
}
