<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'weight',
        'height',
        'width',
        'depth',
        'measurement_unit_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
