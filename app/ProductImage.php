<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['image', 'product_id',];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id' );
    }
}

