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
    	'vat_rate',
    	'product_category_id',
    	'status'
    ];

    protected $uploads = '/images/';

    public function getFileAttribute($photo){
        return $this->uploads. $photo;
    }

    public function productCategory()
    {
        return $this->belongsTo('App\ProductCategory');
    }

    public function purchases() {
        return $this->belongsToMany('App\Purchase');
    }

}
