<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //products tables all field

    protected $fillable = [
        'super_category_name',
        'super_category_image',
        'unicode',
        'sub_category_name',
        'sub_category_primary_image',
        'sub_category_secondary_image',
        'price',
        'sku_code',
        'entry_date',
        'expire_date',
        'regular_price',
        'discount_price',
        'description'
    ];
}
