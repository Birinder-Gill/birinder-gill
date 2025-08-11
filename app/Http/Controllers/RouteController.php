<?php

namespace App\Http\Controllers;

use App\Models\Project;
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

    public function services()
    {
        return view('frontend.services', ['title' => 'Our Services']);
    }

    public function portfolio()
    {
        $projects = Project::active()
            ->featured()
            ->orderBy('sort_order')
            ->get();

        return view('frontend.portfolio', [
            'title' => 'My Portfolio',
            'projects' => $projects
        ]);
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

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy', ['title' => 'Privacy Policy']);
    }

    public function termsConditions()
    {
        return view('frontend.terms-conditions', ['title' => 'Terms & Conditions']);
    }
}
