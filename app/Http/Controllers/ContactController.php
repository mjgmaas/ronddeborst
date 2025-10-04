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

        $submission = ContactSubmission::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'remarks' => $validated['remarks'],
            'ip_address' => (string) ($_SERVER['REMOTE_ADDR'] ?? ''),
            'submitted_at' => now(),
        ]);

        $recipient = config('contact.recipient');
        if (! empty($recipient)) {
            Mail::to($recipient)->send(new ContactSubmissionReceived($submission));
        }

        if (! empty($submission->email)) {
            Mail::to($submission->email)->send(new ContactSubmissionConfirmation($submission));
        }

        return redirect()->route('contact.show')->with('status', 'Bedankt! Jouw bericht is verstuurd.');
    }
}