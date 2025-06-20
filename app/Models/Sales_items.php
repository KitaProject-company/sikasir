<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_items extends Model
{
    /** @use HasFactory<\Database\Factories\SalesItemsFactory> */
    use HasFactory;

       protected $fillable = [
        'sale_id',
        'product_id',
        'quantity',
        'price',
        'subtotal',
    ];
}
