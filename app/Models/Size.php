<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;

class Size extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongTo(Category::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
