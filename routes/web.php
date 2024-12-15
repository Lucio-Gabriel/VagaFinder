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
Route::get('vacancies/{vacancy}/edit', \App\Livewire\Pages\RegisterVacancies\Edit::class)->name('vacancies.edit');
//Route::get('vacancies', \App\Livewire\Pages\RegisterVacancies\Edit::class)->name('vacancies.edit');

require __DIR__.'/auth.php';
