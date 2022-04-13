<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function showcategory()
    {
       return view('categories.create');
    }






    /**
     * saveCategory
     *enregistrer les donnes de la base de donne en utilisant le model CATEGORY
     * @param  mixed $request
     * @return void
     */
    public function saveCategory(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $categorie = new Category();
        $categorie->name = $request->name;
        $categorie->slug = Str::slug($request->name);
        $categorie->save();
        flashy()->success('The Category has been added with sucess');


        return redirect()->route('all-categories');
    }

    /**
     * This function shows allCategories by return a view
     *
     * @return void
     */
    public function allCategories()
    {
        $categorylist = Category::all();
        return view('categories.index', compact('categorylist'));
    }

    public function showEditcategory($id)
    {
        $category = Category::findOrFail(decrypt($id));
        if ($category) {
           
            return view('categories.edit', compact('category'));
        } else {
            flashy()->error('Unknown Category');
            return back();
        }
    }
    
    /**
     * SaveEditCategory:Edit a Category by using redirection
     *
     * @param  mixed $id
     * @param  mixed $request
     * @return void
     */
    public function SaveEditCategory($id,Request $request)
    {

        $request->validate([
            'name' => 'required'
        ]);
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        flashy()->success('The Category has been edit with sucess');
        return redirect()->route('all-categories');
    }

    public function deleteCategory($id)
    {   
        // METHODE UNE
        // $category = Category::find($id);
        // $category->delete();
        
        // METHOD DEUX
        if (Category::destroy($id)) {
            flashy()->success('The Category has been delete with sucess');
           
        }else{
            flashy()->error('An error occurred , try again later');
        }
        return back();
        
    }
}
