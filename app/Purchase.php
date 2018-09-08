<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table;

    protected $fillable=['date', 'document', 'observation', 'sucursals_id', 'users_id', 'providers_id'];  

    public function user()
    {

    	return $this->belongsTo('App\User');
    }  
    public function sucursal()
    {

    	return $this->belongsTo('App\Sucursal');
    }
    public function provider()
    {

        return $this->belongsTo('App\Provider');
    }
    public function products()
    {

        return $this->belongsToMany('App\Product');
    }
    
}
