<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    
	protected $fillable = [

		'id',
		'name',
		'description',
		'status'

	];

	public function products() {
		return $this->hasMany('App\Products');
	}

}
