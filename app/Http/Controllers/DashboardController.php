<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use App\Models\Team;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $viewData['title'] = "Historique Mails";

        $viewData['contacts'] = Contact::orderBy('ID','DESC')->paginate(10);

        $viewData['membres'] = Team::get();

        $viewData['activites'] = Product::get();

        $viewData['temoignages'] = Temoignage::get();

        $viewData['mails'] = Contact::get();

        return view('dashboard')->with('viewData', $viewData);
    }

    public function deleteContact(Contact $contact)
    {
        $contact->delete();

        return redirect()->back();
    }
}
