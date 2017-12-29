<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
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

    protected $uploads = '/images/';

    public function getFileAttribute($photo){
        return $this->uploads. $photo;
    }

}
