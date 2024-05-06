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
        $viewData['title'] = 'Liste des catégories des engins';
        $viewData['categories'] = Category::all();

        return view('categories.index')->with('viewData',$viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData['title'] = 'Ajouter une catégorie engin';

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

        $imageName = time().'.'.$request->image->extension();  
            
        $destinationPathThumbnail = public_path('categories');
        $img = Image::make($request->image->path());
        $img->save($destinationPathThumbnail.'/'.$imageName);
        // $img->resize(200, 200)->save($destinationPathThumbnail.'/'.$imageName);

        $category = new Category();
        $category->name = $request->title;
        $category->slug = Str::slug($request->title);
        $category->image = $imageName;

        $category->save();

        return Redirect::back()->with('success', 'Categorie engin ajoutée avec succès');

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
            'image' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'
        ],[
            'title.required' => 'Entrer le nom de la catégorie',
            'image.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'image.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

        $category->name = $request->title;
        $category->slug = Str::slug($request->title);

        $category->save();

        if($request->hasFile('image')){

            $imageName = time().'.'.$request->image->extension();  
            
            $destinationPathThumbnail = public_path('categories');
            $img = Image::make($request->image->path());
            $img->save($destinationPathThumbnail.'/'.$imageName);
            // $img->resize(200, 200)->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('categories/'.$category->image));

            $category->image = $imageName;

        }

        $category->save();

        return Redirect::back()->with('success', 'Catégorie engin modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->image){

            unlink(public_path('categories/'.$category->image));
        }
        
        $category->delete();

        return Redirect::back()->with('success', 'Catégorie supprimée avec succès');
    }
}
