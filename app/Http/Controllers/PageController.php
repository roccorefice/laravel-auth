<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{ 
    // homePage
    public function index()
    {
        return view('guests.index');
    }

    // about
    public function about()
    {
        return view('guests.about');
    }

    // contacts
    public function contacts()
    {
        return view('guests.contacts');
    }

    
}
