<?php

declare(strict_types=1);

use App\Mail\ContactSubmissionReceived;
use App\Models\ContactSubmission;

it('sets the reply-to address to the contact form sender', function () {
    $submission = new ContactSubmission([
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'remarks' => 'Hello there',
        'city' => 'Utrecht',
    ]);

    $mail = new ContactSubmissionReceived($submission);

    expect($mail->hasReplyTo('jane@example.com', 'Jane Doe'))->toBeTrue();
    expect($mail->hasSubject('Nieuwe contactaanvraag'))->toBeTrue();
});
