<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $viewData['title'] = "Historique Mails";

        $viewData['contacts'] = Contact::orderBy('ID','DESC')->paginate(5);

        return view('dashboard')->with('viewData', $viewData);
    }
}
