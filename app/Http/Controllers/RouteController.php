<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('frontend.home', ['title' => 'Home']);
    }

    public function contact()
    {
        return view('frontend.contact', ['title' => 'Contact Us']);
    }
    
    public function about()
    {
        return view('frontend.about', ['title' => 'About Us']);
    }

    public function uiUxDesign()
    {
        return view('frontend.services.ui_design', ['title' => 'UI/UX Design Services']);
    }

    public function webDevelopment()
    {
        return view('frontend.services.web_development', ['title' => 'Web Development Services']);
    }

    public function mobileDevelopment()
    {
        return view('frontend.services.mobile_development', ['title' => 'Mobile App Development Services']);
    }

    public function digitalMarketing()
    {
        return view('frontend.services.digital_marketing', ['title' => 'Digital Marketing Services']);
    }
}
