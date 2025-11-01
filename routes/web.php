<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('clientes', 'admin.customers')->name('clientes');
    Route::view('eventos', 'admin.events')->name('eventos');
});



require __DIR__.'/auth.php';
