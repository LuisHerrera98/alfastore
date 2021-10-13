<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Category;

class SizeController extends Controller
{
    public function store(Request $request, $category_id){
        $validData = $request->validate([
            'size' => 'required|min:1',
            'category' => 'required'
        ]);
        $category = Category::findOrFail($category_id);
        $category_name = $category->category;
        
        $size = new Size();
        $size->size = $request->get('size');
        $size->category_id = $category_id;
        $size->save();
        $redirect = '/category' . '/' . $category_id . '/' . $category_name;
        return redirect($redirect);
    }
}

