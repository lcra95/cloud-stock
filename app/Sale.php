<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table;

    protected $fillable=['date','observation', 'mount', 'iva', 'total', 'sucursals_id', 'users_id', 'clients_id'];   //

    public function user()
    {

    	return $this->belongsTo('App\User');
    }
    public function sucursal()
    {

    	return $this->belongsTo('App\Sucursal');
    }
    public function client()
    {

    	return $this->belongsTo('App\Client');
    }
    public function deliveries()
    {

    	return $this->hasMany('App\Delivery'); 
    }
    public function products()
    {

        return $this->belongsToMany('App\Product');
    }
    
}
