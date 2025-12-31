<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Display Contact Page
    public function index()
    {
        return view('pages.contact');
    }

    // Handle Contact Form Submission
    public function submit(Request $request)
    {
        // Validate form data
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Option 1: Store in DB (optional)
        // ContactMessage::create($request->all());

        // Option 2: Send Email
        /*
        Mail::to('info@yourcompany.com')->send(new ContactFormMail($request->all()));
        */

        // Redirect back with success message
        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
