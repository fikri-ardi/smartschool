<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/news', \App\Http\Livewire\News::class)->name('news');
    Route::get('/dashboard', \App\Http\Livewire\Dashboards::class)->name('dashboard');
});

require __DIR__.'/auth.php';
