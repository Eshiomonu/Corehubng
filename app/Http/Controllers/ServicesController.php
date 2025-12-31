<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // Main Services Page
    public function index()
    {
        return view('services.index');
    }

    // Individual Service Pages
    public function itConsultation()
    {
        return view('services.it-consultation');
    }

    public function webSoftware()
    {
        return view('services.web-software');
    }

    public function graphicDesign()
    {
        return view('services.graphic-design');
    }

    public function electronics()
    {
        return view('services.electronics');
    }

    public function logistics()
    {
        return view('services.logistics');
    }

    public function education()
    {
        return view('services.education');
    }
}
