<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wharehouse extends Model
{
     protected $table;

    protected $fillable=['name', 'sucursals_id'];

    public function sucursal()
    {

    	return $this->belongsTo('App\Sucursal');
    }
    public function products()
    {

        return $this->belongsToMany('App\Product');
    }
}
