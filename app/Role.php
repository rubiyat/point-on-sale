<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [

		'id',
		'name'

	];

	public function employees() {
		return $this->hasMany('App\Employee');
	}
}