<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
    	'id',
    	'name',
    	'description',
    	'price',
    	'image',
    	'vate_rate',
    	'product_category_id',
    	'status'
    ];
}
