<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission
     */
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please check your form data and try again.');
        }

        $validated = $validator->validated();

        try {
            // Send email to jetrainfo@gmail.com
            Mail::raw($this->formatEmailContent($validated), function ($message) use ($validated) {
                $message->to('jetrainfo@gmail.com')
                    ->subject('New Contact Form Submission: ' . $validated['subject'])
                    ->replyTo($validated['email'], $validated['name']);
            });

            return back()->with('success', 'Thank you for your message! We will get back to you soon..');

        } catch (\Exception $e) {
            Log::error('Contact form email failed: ' . $e->getMessage());
            return back()
                ->withInput()
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }

    /**
     * Format the email content
     */
    private function formatEmailContent($data)
    {
        return "
New Contact Form Submission

Name: {$data['name']}
Email: {$data['email']}
Subject: {$data['subject']}

Message:
{$data['message']}

---
This message was sent from the Jetra contact form.
        ";
    }
}
