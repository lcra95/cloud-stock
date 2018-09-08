<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    protected $table;

    protected $fillable=['quantity','price','iva','total','products_id','sales_id'];   //

}
