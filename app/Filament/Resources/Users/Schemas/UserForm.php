<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Placeholder;
use Filament\Schemas\Schema;
use PragmaRX\Google2FA\Google2FA;
use PragmaRX\Google2FAQRCode\Google2FA as Google2FAQRCode;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User Information')
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        DateTimePicker::make('email_verified_at'),
                        TextInput::make('password')
                            ->password()
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('Two Factor Authentication')
                    ->schema([
                        Toggle::make('two_factor_enabled')
                            ->label('Enable 2FA')
                            ->live()
                            ->afterStateUpdated(function ($state, $set, $get) {
                                if ($state) {
                                    // Generate a new secret key
                                    $google2fa = new Google2FA();
                                    $secretKey = $google2fa->generateSecretKey();
                                    $set('two_factor_secret', $secretKey);
                                    $set('two_factor_confirmed_at', now());

                                    // Generate recovery codes
                                    $recoveryCodes = [];
                                    for ($i = 0; $i < 8; $i++) {
                                        $recoveryCodes[] = strtoupper(substr(md5(uniqid()), 0, 8));
                                    }
                                    $set('two_factor_recovery_codes', implode("\n", $recoveryCodes));
                                } else {
                                    $set('two_factor_secret', null);
                                    $set('two_factor_recovery_codes', null);
                                    $set('two_factor_confirmed_at', null);
                                }
                            }),

                        TextInput::make('two_factor_secret')
                            ->label('Secret Key')
                            ->disabled()
                            ->dehydrated(false)
                            ->visible(fn ($get) => $get('two_factor_enabled')),

                        Placeholder::make('qr_code')
                            ->label('QR Code for Authenticator App')
                            ->content(function ($get) {
                                $secret = $get('two_factor_secret');
                                if (!$secret) return 'Enable 2FA first to see QR code';

                                $google2fa = new Google2FAQRCode();
                                //$qrCodeUrl = $google2fa->getQRCodeUrl(
                                $qrCodeUrl = $google2fa->getQRCodeInline(
                                    config('app.name'),
                                    $get('email'),
                                    $secret
                                );

                                return new \Illuminate\Support\HtmlString(
                                    '<img src="' . $qrCodeUrl . '" alt="QR Code" style="max-width: 200px;">'
                                );
                            })
                            ->visible(fn ($get) => $get('two_factor_enabled')),

                        Textarea::make('two_factor_recovery_codes')
                            ->label('Recovery Codes (save these securely!)')
                            ->disabled()
                            ->dehydrated(false)
                            ->rows(4)
                            ->visible(fn ($get) => $get('two_factor_enabled')),

                        DateTimePicker::make('two_factor_confirmed_at')
                            ->label('2FA Enabled At')
                            ->disabled()
                            ->visible(fn ($get) => $get('two_factor_enabled')),
                    ])
                    ->collapsible(),
            ]);
    }
}
