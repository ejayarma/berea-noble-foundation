<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin\ContactForm;
use Illuminate\Support\Facades\DB;

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
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'organization' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|string|max:20',
            'country'     => 'required|string|max:2|exists:countries,short_name',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string|max:1000',
        ], [
            'country.exists' => "Please select a valid country"
        ]);

        DB::transaction(function () use ($data) {
            ContactForm::create($data);

            defer(function () use ($data) {
                Mail::raw("Message from {$data['name']} ({$data['email']} - {$data['phone']})\n\n{$data['message']}", function ($msg) use ($data) {
                    $msg->to('info@beanoblefoundation.org')
                        ->subject($data['subject']);
                });
            });
        });

        return back()->with('success', 'Your message has been sent!');
    }
}
