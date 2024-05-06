<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData['title'] = 'Votre organisation';

        $viewData['organisations'] = Organisation::all();

        return view('organisation.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Organisation $organisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organisation $organisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organisation $organisation)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'slogan' => 'required',
            'logo' => 'mimes:jpeg,jpg,png,gif,svg|max:8000'
        ],);

        $organisation->name = $request->name;
        $organisation->phone = $request->phone;
        $organisation->email = $request->email;
        $organisation->adress = $request->adress;
        $organisation->slogan = $request->slogan;
        $organisation->facebook = $request->facebook;
        $organisation->twitter = $request->twitter;
        $organisation->instagram = $request->instagram;
        $organisation->youtube = $request->youtube;
        $organisation->linkedin = $request->linkedin;

        $organisation->save();

        if($request->hasFile('logo')){
            
            $imageName = time().'.'.$request->logo->extension();  

            $destinationPathThumbnail = public_path('about');
            $img = Image::make($request->logo->path());
            $img->save($destinationPathThumbnail.'/'.$imageName);
            // $img->resize(100, 64)->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('about/').$organisation->logo);

            $organisation->logo = $imageName;

        }

        $organisation->save();

        return Redirect::back()->with('success', 'Modifications effectuées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organisation $organisation)
    {
        //
    }
}
