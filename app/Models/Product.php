<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'barcode',
        'product_base_price',
        'product_sell_price',
        'quantity',
        'status'
    ];
}
