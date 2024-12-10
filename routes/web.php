<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('register-vacancies', \App\Livewire\Pages\RegisterVacancies\RegisterVacancies::class)->name('vacancies.index');

require __DIR__.'/auth.php';
