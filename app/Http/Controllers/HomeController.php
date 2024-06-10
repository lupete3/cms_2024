<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Galery;
use App\Models\Partenaire;
use App\Models\Product;
use App\Models\Reason;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Success;
use App\Models\Team;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $viewData = [];
        $viewData['title'] = 'COOPABU RDC';

        // Recuperation des slides
        $viewData['slides'] = Slide::all();

        // Recuperation des informations apropos
        $viewData['abouts'] = About::all();

        // Recuperation des informations du succes de parcours
        $viewData['successes'] = Success::all();

        // Recuperation des informations de la raison d'etre choisi
        $viewData['reasons'] = Reason::all();

        // Recuperation des informations des services
        $viewData['services'] = Service::all();

        // Recuperation des informations des services
        $viewData['categories'] = Category::all();

        // Recuperation des informations des categories
        $viewData['activites'] = Product::with('category')->orderBy('id','DESC')->paginate(8);

        // Recuperation des informations des membres
        $viewData['teams'] = Team::all();

        // Recuperation des informations des temoignages
        $viewData['temoignages'] = Temoignage::orderBy('id','DESC')->get();

        // Recuperation des informations des partenaires
        $viewData['partenaires'] = Partenaire::orderBy('id','DESC')->get();

        return view('index')->with('viewData', $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData['title'] = 'Apropos de nous';

        // Recuperation des informations apropos
        $viewData['abouts'] = About::all();

        // Recuperation des informations du succes de parcours
        $viewData['successes'] = Success::all();

        // Recuperation des informations des membres
        $viewData['teams'] = Team::all();

        // Recuperation des informations des partenaires
        $viewData['partenaires'] = Partenaire::orderBy('id','DESC')->get();

        return view('about.about-visitor')->with('viewData', $viewData);
    }

    public function projets()
    {
        $viewData = [];
        $viewData['title'] = 'Nos projets';

        // Recuperation des informations apropos
        $viewData['abouts'] = About::all();

        return view('about.projets-visitor')->with('viewData', $viewData);
    }

    public function service()
    {
        $viewData = [];
        $viewData['title'] = 'Nos services';

        // Recuperation des informations des services
        $viewData['services'] = Service::all();

        return view('services.service-visitor')->with('viewData', $viewData);
    }

    public function galeries()
    {
        $viewData = [];
        $viewData['title'] = 'Nos galeries photos';

        // Recuperation des informations des services
        $viewData['galeries'] = Galery::latest()->get();

        return view('about.galery-visitor')->with('viewData', $viewData);
    }

    public function contact()
    {
        $viewData = [];
        $viewData['title'] = 'Nous Contacter';

        return view('contact')->with('viewData', $viewData);
    }


}
