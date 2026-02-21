<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::view('/nolia-babyfeeding', 'babyfeeding')->name('nolia-babyfeeding');
Route::permanentRedirect('/centering-feeding', '/nolia-babyfeeding');
Route::permanentRedirect('/centring-feeding', '/nolia-babyfeeding');
Route::permanentRedirect('/babyfeeding', '/nolia-babyfeeding');
Route::view('/consulten-aanbod', 'consulten-aanbod')->name('consulten-aanbod');
Route::view('/consulten', 'consulten')->name('consulten');
Route::view('/over-mij', 'over-mij')->name('over-mij');
Route::view('/privacy-avg', 'privacy-avg')->name('privacy-avg');
Route::view('/algemene-voorwaarden', 'algemene-voorwaarden')->name('algemene-voorwaarden');
Route::view('/kwaliteit', 'kwaliteit')->name('kwaliteit');
