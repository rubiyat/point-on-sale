<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
    	'id',
    	'total_purchase_price',
    	'total_purchase_quantity',
    	'purchase_date_time',
    	'supplier_id'
    ];

}
