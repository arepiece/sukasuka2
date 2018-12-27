<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsPhoto extends Model
{
        protected $table = 'ProductsPhoto';
    protected $fillable = ['product_id', 'img_name'];
    //
}
