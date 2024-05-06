<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData['title'] = 'Liste des services';
        $viewData['services'] = Service::all();

        return view('services.index')->with('viewData',$viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData['title'] = 'Ajouter un service';

        return view('services.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->slug = Str::slug($request->title);
        $service->icon = $request->icon;

        $service->save();

        return Redirect::back()->with('success', 'Service ajouté avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $viewData['title'] = $service->title;

        return view('services.update',compact('service'))->with('viewData', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $service->title = $request->title;
        $service->description = $request->description;
        $service->slug = Str::slug($request->title);
        $service->icon = $request->icon;

        $service->save();

        return Redirect::back()->with('success', 'Service modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {

        $service->delete();

        return Redirect::back()->with('success', 'Service supprimé avec succès');
    }
}
