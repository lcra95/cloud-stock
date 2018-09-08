<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table;

    protected $fillable=['name', 'date', 'observation', 'price', 'status','sales_id'];   

    public function sale()
    {

    	return $this->belongsTo('App\Sale');
    } 
}
