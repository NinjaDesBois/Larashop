<?php
namespace App\Http\ViewComposers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class HeaderComposer
{
 public function compose(View $view)
 {
        //  $view->with('categorylist',Category::all());
        //  $view->with('products' ,Product::all());
}
}