<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $table = 'variants';

    protected $primaryKey = 'variants_id';

    protected $fillable = [
        'product_id',
        'size',
        'quantity',
        'status'
    ];
}
