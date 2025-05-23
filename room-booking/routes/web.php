<?php

use App\Livewire\Counter;
use App\Livewire\Ruang\EditRuang;
use App\Livewire\Ruang\ListRuang;
use App\Livewire\Settings\Profile;
use App\Livewire\Ruang\CreateRuang;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('/counter', Counter::class);

    Route::get('/ruang', ListRuang::class)->name('ruang.index');
    Route::get('/ruang/create', CreateRuang::class)->name('ruang.create');
    Route::get('/ruang/edit/{ruang}', EditRuang::class)->name('ruang.edit');
});

require __DIR__ . '/auth.php';
