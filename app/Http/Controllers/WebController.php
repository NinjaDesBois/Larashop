<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function admin()
    {    
        $products=Product::all();
        $categorylist=Category::all();
        return view('ad.admin',compact('products','categorylist'));
    }
}
