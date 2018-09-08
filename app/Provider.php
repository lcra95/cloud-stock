<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table;

    protected $fillable=['rut', 'name', 'direction', 'email', 'telephone'];

    public function purchases()
    {

    	return $this->hasMany('App\Purchase');
    }
    public function products()
    {

        return $this->belongsToMany('App\Product');
    }
}
