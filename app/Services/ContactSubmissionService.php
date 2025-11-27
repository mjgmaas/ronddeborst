<?php

namespace App\Services;

use App\Mail\ContactSubmissionConfirmation;
use App\Mail\ContactSubmissionReceived;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Mail;

class ContactSubmissionService
{
    public function handle(array $validated): ContactSubmission
    {
        $submission = ContactSubmission::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'remarks' => $validated['remarks'],
            'ip_address' => (string) ($_SERVER['REMOTE_ADDR'] ?? ''),
            'submitted_at' => now(),
        ]);

        $recipient = config('contact.recipient');
        if (!empty($recipient)) {
            Mail::to($recipient)->send(new ContactSubmissionReceived($submission));
        }

        if (!empty($submission->email)) {
            Mail::to($submission->email)->send(new ContactSubmissionConfirmation($submission));
        }

        return $submission;
    }
}
