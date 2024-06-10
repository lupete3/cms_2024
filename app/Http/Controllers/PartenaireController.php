<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;
use Image;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData["title"] = "Nos partenaires";
        $viewData['partenaires'] = Partenaire::all();

        return view('partenaires.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData["title"] = "Ajouter un partenaire";

        return view('partenaires.create')->with('viewData', $viewData);
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
            
        $destinationPathThumbnail = public_path('partenaires');
        $img = Image::make($request->image->path());
        $img->save($destinationPathThumbnail.'/'.$imageName);
        // $img->resize(500, 500)->save($destinationPathThumbnail.'/'.$imageName);

        Partenaire::create([
            'image' => $imageName
        ]);

        return redirect()->route('partenaires.create')->with('success', 'Partenaire enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partenaire $partenaire)
    {
        $viewData = [];
        $viewData["title"] = "Modification partenaire";

        return view('partenaires.edit', compact('partenaire'))->with("viewData", $viewData);
    }

    public function partenaires()
    {
        $viewData = [];
        $viewData["title"] = "COOPABU Asbl | partenaires";
        $viewData['partenaires'] = Partenaire::latest()->paginate(9);
        
        return view('partenaires.all')->with("viewData", $viewData);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partenaire $partenaire)
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
                
            $destinationPathThumbnail = public_path('partenaires');
            $img = Image::make($request->image->path());
            $img->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('partenaires/'.$partenaire->image));

            $partenaire->image = $imageName;

            $partenaire->save(); 
       }

       return redirect()->back()->with('success', 'Modifications appliquée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partenaire $partenaire)
    {
        unlink(public_path('partenaires/'.$partenaire->image));
        
        $partenaire->delete();

        return redirect()->back()->with('success', 'Partenaire supprimée avec succès');

    }
}
