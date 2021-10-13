<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Size;

class Category extends Model
{
    use HasFactory;
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //relationships many-to-many

    
}
