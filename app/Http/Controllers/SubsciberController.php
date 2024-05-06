<?php

namespace App\Http\Controllers;

use App\Models\Subsciber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;

class SubsciberController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ],[
            'name.required' => 'Entrer votre email'
        ]);

        $subsciber = new Subsciber();

        $subsciber->email = $request->email;

        $subsciber->save();

        return Redirect::back()->with('success', 'Merci de votre inscription');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subsciber $subsciber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subsciber $subsciber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subsciber $subsciber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subsciber $subsciber)
    {
        //
    }
}
