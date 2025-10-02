<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Build the application using the fluent builder
$builder = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    });

// Create the underlying application instance
$app = $builder->create();

// Prefer .env.dev locally when the file exists (before bootstrapping happens)
$devEnvPath = $app->environmentPath().DIRECTORY_SEPARATOR.'.env.dev';
if (is_file($devEnvPath)) {
    $app->loadEnvironmentFrom('.env.dev');
}

return $app;