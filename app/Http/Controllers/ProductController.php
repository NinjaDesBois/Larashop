<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $categorylist=Category::all();
        return view('products.create',compact('categorylist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->Qty = $request->Qty;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->image = $request->file('image')->store('products');
        $product->slug = Str::slug($request->name);
        $product->save();
        flashy()->success('The Product has been added with sucess');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail(decrypt($id));
        if ($product) {
           
            return view('products.edit', compact('product'));
        } else {
            flashy()->error('Unknown Product');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->Qty = $request->Qty;
        $product->price = $request->price;
        $product->description = $request->description;
      
       
        $product->save();
        flashy()->success('The Product has been edit with sucess');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Product::destroy($id)) {
            flashy()->success('The Product has been delete with sucess');
           
        }else{
            flashy()->error('An error occurred , try again later');
        }
        return back();
    
    }
}



     // public function showproduct()
    //     {
    //        return view('products.create');
    //     }
    
    //     /**
    //      * saveProduct
    //      *enregistrer les donnes de la base de donne en utilisant le model CATEGORY
    //      * @param  mixed $request
    //      * @return void
    //      */
    
    //     public function saveProduct(Request $request)
    //     {
    //         $request->validate([
    //             'name' => 'required'
    //         ]);
    //         $produit = new Product();
    //         $produit->name = $request->name;
    //         $produit->Qty = $request->Qty;
    //         $produit->slug = Str::slug($request->name);
    //         $produit->save();
    //         flashy()->success('The Product has been added with sucess');
    
    
    //         return view('products.create');
    //     }
    
    //     /**
    //      * This function shows allCategories by return a view
    //      *
    //      * @return void
    //      */
    //     public function allProducts()
    //     {
    //         $productlist = Product::all();
    //         return view('products.index', compact('productlist'));
    //     }
    
    //     public function showEditproduct($id)
    //     {
    //         $product = Product::findOrFail(decrypt($id));
    //         if ($product) {
               
    //             return view('produits.edit', compact('product'));
    //         } else {
    //             flashy()->error('Unknown Product');
    //             return back();
    //         }
    //     }
        
    //     /**
    //      * SaveEditProduct:Edit a Product by using redirection
    //      *
    //      * @param  mixed $id
    //      * @param  mixed $request
    //      * @return void
    //      */
    //     public function SaveEditProduct($id,Request $request)
    //     {
    
    //         $request->validate([
    //             'name' => 'required'
    //         ]);
    //         $product = Product::findOrFail($id);
    //         $product->name = $request->name;
    //         $product->save();
    //         flashy()->success('The Product has been edit with sucess');
    //         return redirect()->route('all-products');
    //     }
    
    //     public function deleteProduct($id)
    //     {   
    //         // METHODE UNE
    //         // $category = Category::find($id);
    //         // $category->delete();
            
    //         // METHOD DEUX
    //         if (Product::destroy($id)) {
    //             flashy()->success('The Product has been delete with sucess');
               
    //         }else{
    //             flashy()->error('An error occurred , try again later');
    //         }
    //         return back();