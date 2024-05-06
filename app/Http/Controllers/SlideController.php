<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Liste des slides';
        $viewData['slides'] = Slide::all();

        return view('slides.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        $viewData['title'] = 'Ajouter un slide';

        return view('slides.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'slide' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'
        ],[
            'title.required' => 'Entrer le nom du cahier',
            'description.required' => 'Entrer le volume du cahier',
            'slide.required' => 'Choisir une photo de slide',
            'slide.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'slide.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

        $imageName = time().'.'.$request->slide->extension();  
            
        $destinationPathThumbnail = public_path('slides');
        $img = Image::make($request->slide->path());
        $img->resize(1920, 1080)->save($destinationPathThumbnail.'/'.$imageName);

        $slide = new Slide;
        $slide->title = $request->title;
        $slide->description = $request->description;
        $slide->image = $imageName;

        $slide->save();

        return Redirect::back()->with('success', 'Slide ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slide $slide)
    {
        $viewData['title'] = 'Modifier le slide';

        return view('slides.update',compact('slide'))->with('viewData',$viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slide $slide)
    {
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'slide' => 'mimes:jpeg,jpg,png,gif,svg|max:10000'
        ],[
            'title.required' => 'Entrer le nom du cahier',
            'description.required' => 'Entrer le volume du cahier',
            'slide.mimes' => 'La photo doit être [jpeg,jpg,png,gif]',
            'slide.max' => 'La photo ne peut pas dépasser 10Mb'
        ]);

        $slide->title = $request->title;
        $slide->description = $request->description;

        $slide->save();

        if($request->hasFile('slide')){

            $imageName = time().'.'.$request->slide->extension();  
            
            $destinationPathThumbnail = public_path('slides');
            $img = Image::make($request->slide->path());
            $img->resize(1920, 1080)->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('slides/'.$slide->image));

            $slide->image = $imageName;

        }

        $slide->save();

        return Redirect::back()->with('success', 'Slide modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slide $slide)
    {
        unlink(public_path('slides/'.$slide->image));
        
        $slide->delete();

        return Redirect::back()->with('success', 'Slide supprimé avec succès');
    }
}
