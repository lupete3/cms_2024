<?php

namespace App\Http\Controllers;

use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData['title'] = 'Liste des témoiganes des clients';
        $viewData['temoignages'] = Temoignage::orderBy('id','DESC')->get();

        return view('temoignages.index')->with('viewData',$viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData['title'] = 'Ajouter un témoigane';

        return view('temoignages.create')->with('viewData',$viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'title' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'
        ],[
            'name.required' => 'Entrer le nom du client',
            'title.required' => 'Entrer la fonction du client',
            'title.description' => 'Entrer le témoignage du client',
            'image.required' => 'Choisir une photo de l\'engin',
            'image.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'image.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

        $imageName = time().'.'.$request->image->extension();  
            
        $destinationPathThumbnail = public_path('temoignages');
        $img = Image::make($request->image->path());
        $img->save($destinationPathThumbnail.'/'.$imageName);
        // $img->resize(100, 100)->save($destinationPathThumbnail.'/'.$imageName);

        $temoignage = new Temoignage();
        $temoignage->name = $request->name;
        $temoignage->title = $request->title;
        $temoignage->description = $request->description;
        $temoignage->image = $imageName;

        $temoignage->save();

        return Redirect::back()->with('success', 'Témoignage ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Temoignage $temoignage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Temoignage $temoignage)
    {
        $viewData['title'] = 'COOPABU |'.$temoignage->name;

        return view('temoignages.update',compact('temoignage'))->with('viewData', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Temoignage $temoignage)
    {
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'title' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'
        ],[
            'name.required' => 'Entrer le nom du client',
            'title.required' => 'Entrer la fonction du client',
            'title.description' => 'Entrer le témoignage du client',
            'image.required' => 'Choisir une photo de l\'engin',
            'image.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'image.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

        $temoignage->name = $request->name;
        $temoignage->title = $request->title;
        $temoignage->description = $request->description;

        $temoignage->save();

        if($request->hasFile('image')){

            $imageName = time().'.'.$request->image->extension();  
            
            $destinationPathThumbnail = public_path('temoignages');
            $img = Image::make($request->image->path());
            $img->save($destinationPathThumbnail.'/'.$imageName);
            // $img->resize(200, 200)->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('temoignages/'.$temoignage->image));

            $temoignage->image = $imageName;

        }

        $temoignage->save();

        return Redirect::back()->with('success', 'Modifications enregistrées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Temoignage $temoignage)
    {
        if($temoignage->image){

            unlink(public_path('temoignages/'.$temoignage->image));
        }
        
        $temoignage->delete();

        return Redirect::back()->with('success', 'Temoignage supprimé avec succès');
    }
}
