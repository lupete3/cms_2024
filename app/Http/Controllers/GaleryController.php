<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Image;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData["title"] = "Notre galerie";
        $viewData['galeries'] = Galery::all();

        return view('galery.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData["title"] = "Ajouter une image";

        return view('galery.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'image' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'

        ],[
            'image.required' => 'Choisir une photo du membre',
            'image.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'image.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

        $imageName = time().'.'.$request->image->extension();  
            
        $destinationPathThumbnail = public_path('galery');
        $img = Image::make($request->image->path());
        $img->save($destinationPathThumbnail.'/'.$imageName);
        // $img->resize(500, 500)->save($destinationPathThumbnail.'/'.$imageName);

        Galery::create([
            'name' => $request->name,
            'image' => $imageName
        ]);

        return redirect()->back()->with('success', 'Image enregistrée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galery)
    {
        $viewData = [];
        $viewData["title"] = "Modification image";

        return view('galery.update', compact('galery'))->with("viewData", $viewData);
    }

    public function galeries()
    {
        $viewData = [];
        $viewData["title"] = "COOPABU | partenaires";
        $viewData['partenaires'] = Galery::latest()->paginate(9);
        
        return view('galery.all')->with("viewData", $viewData);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galery)
    {
        
        $request->validate([
            
            'image' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'

        ],[
            'image.required' => 'Choisir une photo du membre',
            'image.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'image.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

       if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
                
            $destinationPathThumbnail = public_path('galery');
            $img = Image::make($request->image->path());
            $img->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('galery/'.$galery->image));

            $galery->image = $imageName;

       }

       $galery->name = $request->name;

       $galery->save(); 


       return redirect()->back()->with('success', 'Modifications appliquée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery)
    {
        unlink(public_path('galery/'.$galery->image));
        
        $galery->delete();

        return redirect()->back()->with('success', 'Image supprimée avec succès');

    }
}
