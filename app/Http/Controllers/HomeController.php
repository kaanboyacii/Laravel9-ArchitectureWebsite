<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view(view: 'home.index');
    }
    public function about()
    {
        return view(view: 'home.about');
    }
    public function services()
    {
        return view(view: 'home.services');
    }
    public function projects()
    {
        return view(view: 'home.projects');
    }
    public function contact()
    {
        return view(view: 'home.contact');
    }
}
