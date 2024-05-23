<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email logic (or save to database, etc.)
        Mail::raw($request->message, function($message) use ($request) {
            $message->to(config('contact.admin_email'))
                    ->subject('Contact Form Submission from ' . $request->name);
        });

        return redirect()->route('contact.thankyou');
    }

    public function thankYou()
    {
        return view('contactform::thankyou');
    }
}
