<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/admin', [WebController::class,'admin'])->name('admin');



// Add Category
Route::get('add-category',[CategoryController::class,'showcategory'])->name('add-category');
Route::post('save-category',[CategoryController::class,'saveCategory'])->name('save-category');

// Show All Categories
Route::get('categories',[CategoryController::class,'allCategories'])->name('all-categories');


// Edit Category
Route::get('edit-category/{id}',[CategoryController::class,'showEditcategory'])->name('edit-category');
Route::put('edit-category/{id}',[CategoryController::class,'SaveEditCategory'])->name('edit-category');

// DELETE CATEGORY
Route::delete('delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('delete-category');

// ----------------------------------------------------------------------------------------------------------------
Route::get('/', [WebController::class,'home'])->name('app_home');
// ----------------------------------------------------------------------------------------------------------------


Route::resource('product',ProductController::class);




// Add Product
// Route::get('add-product',[ProductController::class,'showproduct'])->name('add-product');
// Route::post('save-product',[ProductController::class,'saveProduct'])->name('save-product');

// Show All Product
// Route::get('produits',[ProductController::class,'allProducts'])->name('all-products');


// Edit Product
// Route::get('edit-product/{id}',[ProductController::class,'showEditproduct'])->name('edit-product');
// Route::put('edit-product/{id}',[ProductController::class,'SaveEditProduct'])->name('edit-product');

// DELETE Product
// Route::delete('delete-product/{id}',[ProductController::class,'deleteProduct'])->name('delete-product');




