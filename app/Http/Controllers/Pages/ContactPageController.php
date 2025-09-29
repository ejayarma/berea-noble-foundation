<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;


class ContactPageController extends Controller
{
    /**
     * Handle the view.
     */
    public function index(Request $request)
    {
        return Inertia::render('Contact');
    }
    /**
     * Handle the form submission request.
     */
    public function post(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'nullable|string|max:20',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string',
        ]);

        // Example: send email (configure mail in .env first)
        Mail::raw("Message from {$data['full_name']} ({$data['email']} - {$data['phone']})\n\n{$data['message']}", function ($msg) use ($data) {
            $msg->to('info@beanoblefoundation.org')
                ->subject($data['subject']);
        });

        return back()->with('success', 'Your message has been sent!');
    }
}
