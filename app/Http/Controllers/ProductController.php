<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;

class ProductController extends Controller
{
    public function create($categoria_id){
        $category = Category::findOrFail($categoria_id);
        $sizes = Size::All()->where('category_id', $categoria_id);

        return view('product/create',[
            'category' => $category,
            'sizes' => $sizes
        ]);
    }

    public function store(Request $request){
        $validData = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'size_id' => 'required'
        ]);
        
        
        $categoria_id = $request->get('category_id');
        $sizes = Size::All()->where('category_id', $categoria_id);
        
        foreach($sizes as $size){
            if($request->get($size->id)){
                $product = new Product();
                $product->name = $request->get('name');
                $product->category_id = $request->get('category_id');
                $product->size_id = $size->id;
                $product->cost = $request->get('cost');
                $product->price = $request->get('price');
                $product->amount =  $request->get($size->id);
                $product->save();

            }
        }
        return "todo listo";
    }
}
