<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
Use Image;

class AboutController extends Controller
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

        $viewData['title'] = 'Modifier les information Apropos';

        $viewData['abouts'] = About::all();

        return view('about.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'phone' => 'required',
            'annee' => 'required',
            'title' => 'required',
            'about_img' => 'mimes:jpeg,jpg,png,gif,svg|max:8000'
        ],);

        $about->title = $request->title;
        $about->annee_experience = $request->annee;
        $about->telephone = $request->phone;
        $about->short_description = $request->short_description;
        $about->text1 = $request->raison1;
        $about->img1 = $request->icon1;
        $about->text2 = $request->raison2;
        $about->img2 = $request->icon2;
        $about->full_description = $request->full_description;
        $about->projets = $request->projets;

        $about->save();

        if($request->hasFile('about_img')){

            $imageName = time().'.'.$request->about_img->extension();
            // $request->couverture->move('images', $imageName);

            $destinationPathThumbnail = public_path('about');
            $img = Image::make($request->about_img->path());
            $img->save($destinationPathThumbnail.'/'.$imageName);
            // $img->resize(800, 800)->save($destinationPathThumbnail.'/'.$imageName);

            unlink(public_path('about/').$about->about_img);

            $about->about_img = $imageName;

        }

        $about->save();

        return Redirect::back()->with('success', 'Modifications effectuées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        dd($about);
    }
}
