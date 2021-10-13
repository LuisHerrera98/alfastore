<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//modelos
use App\Models\Category;
use App\Models\Size;

class CategoryController extends Controller
{
    public function index($id,$category){
        
        return view('category/category',[
            'categories'=> Category::all(),
            'category_id' => $id,
            'category_name' => $category,
            'category_xd' => Category::findOrFail($id)
        ]);
    }

    public function store(Request $request){
        // Recibo de la request el nombre de la categoria nueva, la guardo en $categoryRequest
        // a $categoryRequest lo paso a mayuscula antes de guardar en la db

        $validData = $request->validate([
            'category' => 'required|min:1'
        ]);
        $categoryRequest = $request->get('category');
        $category = new Category();
        $category->category = strtoupper($categoryRequest);
        $category->save();
        return redirect('/');
    }
}
