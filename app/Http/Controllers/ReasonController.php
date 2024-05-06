<?php

namespace App\Http\Controllers;

use App\Models\Reason;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;

class ReasonController extends Controller
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
        $viewData = [];

        $viewData['title'] = 'Pourquoi les clients nous choisissent';
        
        $viewData['reasons'] = Reason::all();

        return view('reasons.create')->with('viewData', $viewData);
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
    public function show(Reason $reason)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reason $reason)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reason $reason)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'background1' => 'mimes:jpeg,jpg,png,gif,svg|max:8000',
        ],);

        $reason->title = $request->title;
        $reason->description = $request->description;
        $reason->text1 = $request->text1;
        $reason->img1 = $request->icon1;
        $reason->text2 = $request->text2;
        $reason->img2 = $request->icon2;
        $reason->text3 = $request->text3;
        $reason->img3 = $request->icon3;
        $reason->text4 = $request->text4;
        $reason->img4 = $request->icon4;

        $reason->save();

        if($request->hasFile('background1')){
            
            $imageName = time().'1.'.$request->background1->extension();  

            $destinationPathThumbnail = public_path('reason');
            $img = Image::make($request->background1->path());
            $img->save($destinationPathThumbnail.'/'.$imageName);
            // $img->resize(700, 700)->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('reason/').$reason->image_full);

            $reason->image_full = $imageName;

        }

        $reason->save();

        return Redirect::back()->with('success', 'Modifications effectuées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reason $reason)
    {
        //
    }
}
