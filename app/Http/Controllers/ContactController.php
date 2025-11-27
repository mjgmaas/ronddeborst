<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactSubmissionReceived;
use App\Mail\ContactSubmissionConfirmation;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(ContactFormRequest $request)
    {
        $validated = $request->validated();
        app(\App\Services\ContactSubmissionService::class)->handle($validated);
        return redirect()->route('contact.show')->with('status', 'Bedankt! Jouw bericht is verstuurd.');
    }
}
