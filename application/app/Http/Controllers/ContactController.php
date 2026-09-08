<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\NewsletterSubscriptionMail;
use App\Mail\ContactFormAdminMail;
use App\Mail\NewsletterAdminMail;

class ContactController extends Controller
{
    /**
     * Handle contact form submission.
     */
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:100|regex:/^[a-zA-Z\s\-\'\.\,]+$/',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'nullable|string|max:20|regex:/^[0-9\+\-\(\)\s]+$/',
            'subject' => 'nullable|string|max:200',
            'services' => 'nullable|string|max:100',
            'address' => 'nullable|string|max:200',
            'website' => 'nullable|url|max:255',
            'message' => 'required|string|min:10|max:2000',
        ]);

        try {
            Mail::to($validated['email'])
                ->send(new ContactFormMail($validated));

            Mail::to(config('mail.admin_email', config('mail.from.address')))
                ->send(new ContactFormAdminMail($validated));

            return response('Thank you for contacting us. We will get back to you soon!', 200);
        } catch (\Exception $e) {
            report($e);
            return response('An error occurred while processing your request. Please try again later.', 500); 
        }
    }

    /**
     * Handle newsletter subscription.
     */
    public function sendNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email:rfc,dns|max:255',
        ]);

        try {
            // Send confirmation email to the subscriber
            Mail::to($validated['email'])
                ->send(new NewsletterSubscriptionMail());

            // Send notification email to the admin
            Mail::to(config('mail.admin_email', config('mail.from.address')))
                ->send(new NewsletterAdminMail($validated['email']));

            return response('Thank you for subscribing to our newsletter!', 200);
        } catch (\Exception $e) {
            report($e);
            return response('An error occurred while processing your request. Please try again later.', 500);
        }
    }
}
