<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'categories_id',
        'created_by',
        'name',
        'code',
        'price',
        'stock',
        'min_stock',
        'created_by'
    ];
}
