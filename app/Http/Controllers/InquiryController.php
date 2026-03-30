<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'services' => 'required|string',
            'name'     => 'nullable|string',
            'message'  => 'nullable|string',
        ]);

        $email    = $request->email;
        $services = $request->services;
        $name     = $request->name ?? 'Sir/Madam';
        $message  = $request->message ?? 'From CTA';

        // Email to YOU
        Mail::raw(
            "New inquiry from: {$email}\nName: {$name}\nInterested in: {$services}\nMessage: {$message}",
            function($msg) use ($email, $services) {
                $msg->to('luqmanikmalrahmad@gmail.com')
                    ->subject("New Inquiry: {$services}");
            }
        );

        // Email to USER
        Mail::raw(
            "Hi {$name},\n\nThanks for reaching out! We've received your inquiry about: {$services}.\n\nWe'll get back to you within 24 hours.\n\nBest,\nSkyInfers Team",
            function($msg) use ($email) {
                $msg->to($email)
                    ->subject("We received your inquiry - SkyInfers");
            }
        );

        return response()->json(['success' => true]);
    }
}
