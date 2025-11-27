<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


 Route::view('/centering-feeding', 'centering-feeding')->name('centering-feeding');
 Route::view('/consulten-aanbod', 'consulten-aanbod')->name('consulten-aanbod');
 Route::view('/consulten', 'consulten')->name('consulten');
 Route::view('/over-mij', 'over-mij')->name('over-mij');
