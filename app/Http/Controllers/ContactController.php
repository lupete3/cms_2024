<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
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
            'name' => 'required',
            'email' => 'required',
            'objet' => 'required',
            'message' => 'required',
        ],[
            'name.required' => 'Entrer votre nom',
            'email.required' => 'Entrer votre email',
            'objet.required' => 'Entrer votre objet',
            'message.required' => 'Entrer votre message',
        ]);

        $temoignage = new Contact();
        $temoignage->name = $request->name;
        $temoignage->email = $request->email;
        $temoignage->object = $request->objet;
        $temoignage->message = $request->message;

        $temoignage->save();

        return Redirect::back()->with('success', 'Merci de nous avoir contacté');
    }


    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
