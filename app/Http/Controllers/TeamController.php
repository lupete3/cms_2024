<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData['title'] = 'Liste des membres';

        $viewData['teams'] = Team::all();

        return view('teams.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData['title'] = 'Ajouter un membre';

        return view('teams.create')->with('viewData',$viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'
        ],[
            'name.required' => 'Entrer le nom de du membre',
            'role.required' => 'Compléter le rôle',
            'image.required' => 'Choisir une photo du membre',
            'image.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'image.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

        $imageName = time().'.'.$request->image->extension();  
            
        $destinationPathThumbnail = public_path('teams');
        $img = Image::make($request->image->path());
        $img->save($destinationPathThumbnail.'/'.$imageName);
        // $img->resize(500, 500)->save($destinationPathThumbnail.'/'.$imageName);

        $team = new Team();
        $team->name = $request->name;
        $team->role = $request->role;
        $team->image = $imageName;

        $team->save();

        return Redirect::back()->with('success', 'Membre ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        $viewData['title'] = 'GRINCO | '.$team->name;

        return view('teams.update',compact('team'))->with('viewData', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'
        ],[
            'name.required' => 'Entrer le nom de du membre',
            'role.required' => 'Compléter le rôle',
            'image.required' => 'Choisir une photo du membre',
            'image.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'image.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

        $team->name = $request->name;
        $team->role = $request->role;

        $team->save();

        if($request->hasFile('image')){

            $imageName = time().'.'.$request->image->extension();  
            
            $destinationPathThumbnail = public_path('teams');
            $img = Image::make($request->image->path());
            $img->save($destinationPathThumbnail.'/'.$imageName);
            // $img->resize(200, 200)->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('teams/'.$team->image));

            $team->image = $imageName;

        }

        $team->save();

        return Redirect::back()->with('success', 'Modifications enregistrées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if($team->image){

            unlink(public_path('teams/'.$team->image));
        }
        
        $team->delete();

        return Redirect::back()->with('success', 'Membre supprimé avec succès');
    }
}
