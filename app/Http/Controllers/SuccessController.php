<?php

namespace App\Http\Controllers;

use App\Models\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;

class SuccessController extends Controller
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

        $viewData['title'] = 'Modifier les information du parcours';
        
        $viewData['success'] = Success::all();

        return view('success.create')->with('viewData', $viewData);
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
    public function show(Success $success)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Success $success)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Success $success)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'background1' => 'mimes:jpeg,jpg,png,gif,svg|max:8000',
            'background2' => 'mimes:jpeg,jpg,png,gif,svg|max:8000'
        ],);

        $success->title = $request->title;
        $success->description = $request->description;
        $success->text1 = $request->text1;
        $success->count1 = $request->count1;
        $success->text2 = $request->text2;
        $success->count2 = $request->count2;
        $success->text3 = $request->text3;
        $success->count3 = $request->count3;
        $success->text4 = $request->text4;
        $success->count4 = $request->count4;

        $success->save();

        if($request->hasFile('background1')){
            
            $imageName = time().'1.'.$request->background1->extension();  

            $destinationPathThumbnail = public_path('success');
            $img = Image::make($request->background1->path());
            $img->resize(1920, 1080)->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('success/').$success->img1);

            $success->img1 = $imageName;

        }

        if($request->hasFile('background2')){
            
            $imageName = time().'2.'.$request->background2->extension();  

            $destinationPathThumbnail = public_path('success');
            $img = Image::make($request->background2->path());
            $img->resize(1920, 1080)->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('success/').$success->img2);

            $success->img2 = $imageName;

        }

        $success->save();

        return Redirect::back()->with('success', 'Modifications effectuées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Success $success)
    {
        //
    }
}
