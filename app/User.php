<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'telephone', 'direction', 'rols_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rols()
    {

        return $this->belongsTo('App\Rol');

    }
    public function sales()
    {

        return $this->hasMany('App\Sale');
    }
    public function purchases()
    {

        return $this->hasMany('App\Purchase');

    }
    public function sucursals()
    {

        return $this->belongsToMany('App\Sucursal');
    }

}
