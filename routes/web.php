<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvoiceController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/invoices/{invoice}/download', [InvoiceController::class, 'download'])->name('invoices.download');
