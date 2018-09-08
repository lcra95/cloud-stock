<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table;

    protected $fillable=['name', 'barcode', 'quantity', 'minimun', 'maximun', 'location', 'cost', 'categories_id', 'brands_id'];    //

    public function brand()
    {
    
    	 return $this->belongsTo('App\Brand');
    
    }

    public function category()
    {
    
    	 return $this->belongsTo('App\Category');
    
    }    

    public function prices()
    {

    	return $this->hasMany('App\Price');
    	
    }
    public function sales()
    {

        return $this->belongsToMany('App\Sale');
    }
    public function wharehouses()
    {

        return $this->belongsToMany('App\Wharehouse');
    }
    public function purchases()
    {

        return $this->belongsToMany('App\Purchase');
    }
    public function providers()
    {

        return $this->belongsToMany('App\Provider');
    }
}
