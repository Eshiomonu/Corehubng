<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home Page
    public function home()
    {
        return view('pages.home');
    }

    // About Page
    public function about()
    {
        return view('pages.about-us');
    }

    // FAQ Page (optional)
    public function faq()
    {
        return view('pages.faq');
    }

    // Terms & Conditions Page
    public function terms()
    {
        return view('pages.terms');
    }

    // Privacy Policy Page
    public function privacy()
    {
        return view('pages.privacy');
    }
}
