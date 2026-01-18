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
        ->set('due_date', '2025-06-01')
        ->call('submit')
        ->assertSet('status', 'Bedankt! Jouw bericht is verstuurd.');

    $stored = ContactSubmission::query()->where('email', 'jane@example.com')->first();
    expect($stored)->not->toBeNull();
    expect(optional($stored->due_date)->toDateString())->toBe('2025-06-01');

    Mail::assertSent(ContactSubmissionReceived::class, function (ContactSubmissionReceived $mail) {
        return $mail->submission->email === 'jane@example.com'
            && optional($mail->submission->due_date)->isSameDay('2025-06-01');
    });

    Mail::assertSent(ContactSubmissionConfirmation::class, function (ContactSubmissionConfirmation $mail) {
        return $mail->submission->email === 'jane@example.com'
            && optional($mail->submission->due_date)->isSameDay('2025-06-01')
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

it('validates input for Livewire contact form', function () {
    Livewire::test(ContactForm::class)
        ->set('name', '')
        ->set('email', '')
        ->set('remarks', '')
        ->call('submit')
        ->assertHasErrors(['name' => 'required', 'email' => 'required', 'remarks' => 'required']);

    Livewire::test(ContactForm::class)
        ->set('name', 'Test User')
        ->set('email', 'not-an-email')
        ->set('remarks', 'Test')
        ->call('submit')
        ->assertHasErrors(['email' => 'email']);

    Livewire::test(ContactForm::class)
        ->set('name', 'Valid User')
        ->set('email', 'valid@example.com')
        ->set('remarks', 'Test')
        ->set('due_date', 'not-a-date')
        ->call('submit')
        ->assertHasErrors(['due_date' => 'date']);
});
