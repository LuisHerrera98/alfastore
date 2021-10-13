<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//model category
use App\Models\Category;

class IndexController extends Controller
{
    public function index(){
        return view('index',[
            'categories'=> Category::all()
        ]);
    }
}
