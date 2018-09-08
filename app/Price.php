<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table;

    protected $fillable=['price', 'products_id'];    //

        public function product()
    {
    
    	 return $this->belongsTo('App\Product');
    
    } 
}
