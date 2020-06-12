<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'quantity', 'cover', 'description'];

    public function images()
    {
        return $this->hasMany(ProductImage::class,'product_id','id' );
    }
}
