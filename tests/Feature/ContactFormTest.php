<?php

declare(strict_types=1);

use App\Mail\ContactSubmissionReceived;
use App\Mail\ContactSubmissionConfirmation;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

it('shows the contact form', function () {
    $response = $this->get(route('contact.show'));

    $response->assertSuccessful();
    $response->assertSee('Contact');
    $response->assertSee('name="name"', false);
    $response->assertSee('name="email"', false);
    $response->assertSee('name="remarks"', false);
});

it('validates input when submitting the contact form', function () {
    $response = $this->post(route('contact.submit'), []);

    $response->assertSessionHasErrors(['name', 'email', 'remarks']);
});

it('submits the contact form, stores it and sends both emails when recipient is configured', function () {
    Mail::fake();
    Config::set('contact.recipient', 'owner@example.com');

    $payload = [
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'phone' => '1234567890',
        'remarks' => 'Hello, I would like to know more about your services.',
    ];

    $response = $this->post(route('contact.submit'), $payload);

    $response->assertRedirect(route('contact.show'));
    $response->assertSessionHas('status');

    expect(ContactSubmission::query()->where('email', 'jane@example.com')->exists())->toBeTrue();

    Mail::assertSent(ContactSubmissionReceived::class, function (ContactSubmissionReceived $mail) use ($payload) {
        return $mail->submission->email === $payload['email']
            && $mail->submission->name === $payload['name'];
    });

    Mail::assertSent(ContactSubmissionConfirmation::class, function (ContactSubmissionConfirmation $mail) use ($payload) {
        return $mail->submission->email === $payload['email']
            && $mail->hasTo($payload['email']);
    });
});

it('submits and only sends confirmation when recipient is not configured', function () {
    Mail::fake();
    Config::set('contact.recipient', null);

    $response = $this->post(route('contact.submit'), [
        'name' => 'John Smith',
        'email' => 'john@example.com',
        'remarks' => 'No recipient configured test.',
    ]);

    $response->assertRedirect(route('contact.show'));

    Mail::assertNotSent(ContactSubmissionReceived::class);
    Mail::assertSent(ContactSubmissionConfirmation::class, function (ContactSubmissionConfirmation $mail) {
        return $mail->hasTo('john@example.com');
    });
});
