<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table;

    protected $fillable=['name', 'siicode', 'contact', 'direction', 'email', 'telephone'];

    public function sales()
    {

    	return $this->hasMany('App\Sale');

    }
    public function purchases()
    {

    	return $this->hasMany('App\Purchase');
    	
    }
    public function wharehouses()
    {

    	return $this->hasMany('App\Sucursal');

    }
    public function users()
    {

        return $this->belongsToMany('App\User');
    }
}
