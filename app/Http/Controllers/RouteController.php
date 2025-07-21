<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function uiUxDesign()
    {
        return view('frontend.services.ui_design');
    }

    public function webDevelopment()
    {
        return view('frontend.services.web_development');
    }
}
