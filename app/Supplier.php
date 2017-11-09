<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    
	protected $fillable = [

		'id',
		'first_name',
		'last_name',
		'company_name',
		'address',
		'email',
		'phone'
	];

}
