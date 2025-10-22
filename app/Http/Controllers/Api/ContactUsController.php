<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\Setting;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bissness_name' => 'required|string|max:255',
            'mobile'        => 'required|string|max:50',
            'city'          => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'note'          => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Save contact message with timestamp
        $contact = ContactUs::create($request->all());

        // Get admin email from settings table
        $admin_email_setting = Setting::where('key', 'admin_email')->first();
        $admin_email = $admin_email_setting ? $admin_email_setting->value : 'admin@example.com';

        // Send email to admin
        Mail::raw(
            "New contact message:\n\nName: {$request->bissness_name}\nMobile: {$request->mobile}\nCity: {$request->city}\nEmail: {$request->email}\nNote: {$request->note}",
            function($message) use ($admin_email) {
                $message->to($admin_email)
                        ->subject('New Contact Message');
            }
        );

        // Send confirmation email to user
        Mail::raw(
            "Dear {$request->bissness_name},\n\nThank you for contacting us. We have received your message and will get back to you shortly.\n\n- Team",
            function($message) use ($request) {
                $message->to($request->email)
                        ->subject('Contact Message Received');
            }
        );

        return response()->json([
            'status' => true,
            'message' => 'Contact message submitted successfully. Emails sent to admin and user.',
            'data' => $contact
        ]);
    }
}
