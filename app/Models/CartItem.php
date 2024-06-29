<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_items';

    protected $primaryKey = 'cart_items_id';

    protected $fillable = [
        'cart_id',
        'product_id',
        'size',
        'quantity',
        'price'
    ];
}
