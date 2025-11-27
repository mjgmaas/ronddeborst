<?php

declare(strict_types=1);

use App\Livewire\ContactForm;
use App\Mail\ContactSubmissionReceived;
use App\Mail\ContactSubmissionConfirmation;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;

it('submits the Livewire contact form, stores it and sends both emails when recipient is configured', function () {
    Mail::fake();
    Config::set('contact.recipient', 'owner@example.com');

    Livewire::test(ContactForm::class)
        ->set('name', 'Jane Doe')
        ->set('email', 'jane@example.com')
        ->set('phone', '1234567890')
        ->set('remarks', 'Hello, I would like to know more about your services.')
        ->call('submit')
        ->assertSet('status', 'Bedankt! Jouw bericht is verstuurd.');

    expect(ContactSubmission::query()->where('email', 'jane@example.com')->exists())->toBeTrue();

    Mail::assertSent(ContactSubmissionReceived::class, function (ContactSubmissionReceived $mail) {
        return $mail->submission->email === 'jane@example.com';
    });

    Mail::assertSent(ContactSubmissionConfirmation::class, function (ContactSubmissionConfirmation $mail) {
        return $mail->submission->email === 'jane@example.com'
            && $mail->hasTo('jane@example.com');
    });
});

it('submits Livewire form and only sends confirmation when recipient is not configured', function () {
    Mail::fake();
    Config::set('contact.recipient', null);

    Livewire::test(ContactForm::class)
        ->set('name', 'John Smith')
        ->set('email', 'john@example.com')
        ->set('remarks', 'No recipient configured test.')
        ->call('submit')
        ->assertSet('status', 'Bedankt! Jouw bericht is verstuurd.');

    Mail::assertNotSent(ContactSubmissionReceived::class);
    Mail::assertSent(ContactSubmissionConfirmation::class, function (ContactSubmissionConfirmation $mail) {
        return $mail->hasTo('john@example.com');
    });
});
