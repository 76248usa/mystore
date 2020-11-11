<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'additional_info', 'image', 'category_id', 'subcategory_id'

    ];
}
