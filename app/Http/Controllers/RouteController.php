<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Project;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

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

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|url|max:255',
            'message' => 'required|string',
        ]);

        // Store in database
        $contact = ContactMessage::create($validated);

        try {
            Mail::to($contact->email)->send(new WelcomeMail($contact));
            $status = 'success';
            $message = 'Thank you for contacting us! We will get back to you soon.';
        } catch (\Exception $e) {
            dd($e->getMessage());
            $status = 'error';
            $message = 'Failed to send email. Please try again later.';
        }
        if ($request->ajax()) {
            return response()->json(['status' => $status, 'message' => $message]);
        }
        return back()->with($status, $message);
    }
}
