<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData['title'] = 'Liste des catégories des activités';
        $viewData['categories'] = Category::all();

        return view('categories.index')->with('viewData',$viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData['title'] = 'Ajouter une catégorie activité';

        return view('categories.create')->with('viewData',$viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->title;
        $category->slug = Str::slug($request->title);

        $category->save();

        return Redirect::back()->with('success', 'Categorie activité ajoutée avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $viewData['title'] = $category->name;

        $categorie = $category;

        return view('categories.update',compact('categorie'))->with('viewData',$viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        
        $request->validate([
            'title' => 'required',
        ],[
            'title.required' => 'Entrer le nom de la catégorie',
        ]);

        $category->name = $request->title;
        $category->slug = Str::slug($request->title);

        $category->save();

        return Redirect::back()->with('success', 'Catégorie activité modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {        
        $category->delete();

        return Redirect::back()->with('success', 'Catégorie supprimée avec succès');
    }
}
