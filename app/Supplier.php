<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    
	protected $fillable = [

		'id',
		'company_name',
		'address',
		'email',
		'phone'
	];

}
