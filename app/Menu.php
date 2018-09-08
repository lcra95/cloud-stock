<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    
    protected $table;

    protected $fillable=['name'];
     
    public function rols()
    {

        return $this->belongsToMany('App\Rol');
    }
}
