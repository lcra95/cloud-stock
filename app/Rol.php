<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table;

    protected $fillable=['name'];    //

    public function users()
    {

    	return $this->hasMany('App\User');
    }
    public function menus()
    {

        return $this->belongsToMany('App\Menu');
    }
}
