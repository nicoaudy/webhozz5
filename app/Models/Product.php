<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        // field id di kategori relasi sama category_id di product
        // id category == product.category_id
        return $this->belongsTo(Category::class, 'category_id');
    }
}
