<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table;

    protected $fillable=['name', 'rut', 'direction', 'email', 'telephone','created_at'];

    public function sales()
    {

    	return $this->hasMany('App\Sale');
    }
}
