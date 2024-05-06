<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData['title'] = 'Liste des engins';

        $viewData['products'] = Product::with('category')->get();

        return view('products.index')->with('viewData',$viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData['title'] = 'Ajouter un engin';

        $viewData['categories'] = Category::all();

        return view('products.create')->with('viewData',$viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'
        ],[
            'title.required' => 'Entrer le nom de l\'engin',
            'description.required' => 'Compléter la description de l\'engin',
            'image.required' => 'Choisir une photo de l\'engin',
            'image.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'image.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

        $imageName = time().'.'.$request->image->extension();  
            
        $destinationPathThumbnail = public_path('products');
        $img = Image::make($request->image->path());
        $img->save($destinationPathThumbnail.'/'.$imageName);
        // $img->resize(700, 700)->save($destinationPathThumbnail.'/'.$imageName);

        $product = new Product();
        $product->name = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->image = $imageName;

        $product->save();

        return Redirect::back()->with('success', 'Engin ajouté avec succès');
    }

    /**
     * Display products by category.
     */
    public function showByCategory(Category $slug)
    {
        $viewData = [];
        $viewData["title"] = $slug->name;

        $viewData['categories'] = Category::all();

        $viewData['products'] = Product::where('category_id', '=', $slug->id)->paginate(6);

        return view('products.all-visitors')->with("viewData", $viewData);
    }

    /**
     * Display all products for users.
     */
    public function showAllVisitors()
    {
        $viewData = [];
        $viewData["title"] = "Tous les engins";

        $viewData['categories'] = Category::all();

        $viewData['products'] = Product::orderBy('id','DESC')->paginate(12);

        return view('products.all-visitors')->with("viewData", $viewData);
    }

    /**
     * Display all products for users.
     */
    public function showDetail(Product $slug )
    {
        $viewData = [];
        $viewData["title"] = "GRINCODRC | ".$slug->name;

        $product = $slug;

        return view('products.detail',compact('product'))->with("viewData", $viewData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $viewData['title'] = 'GRINCODRC | '.$product->name;

        $viewData['categories'] = Category::all();

        return view('products.update',compact('product'))->with('viewData', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'
        ],[
            'title.required' => 'Entrer le nom de l\'engin',
            'description.required' => 'Compléter la description de l\'engin',
            'image.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'image.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

        $product->name = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = $request->description;
        $product->category_id = $request->category;

        $product->save();

        if($request->hasFile('image')){

            $imageName = time().'.'.$request->image->extension();  
            
            $destinationPathThumbnail = public_path('products');
            $img = Image::make($request->image->path());
            $img->save($destinationPathThumbnail.'/'.$imageName);
            // $img->resize(200, 200)->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('products/'.$product->image));

            $product->image = $imageName;

        }

        $product->save();

        return Redirect::back()->with('success', 'Modifications enregistrées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if($product->image){

            unlink(public_path('products/'.$product->image));
        }
        
        $product->delete();

        return Redirect::back()->with('success', 'Catégorie supprimée avec succès');
    }
}
