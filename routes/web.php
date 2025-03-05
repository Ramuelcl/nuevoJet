<?php

use App\Http\Controllers\HomeController;
use App\Livewire\GuzanetDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', GuzanetDashboard::class)->name('dashboard');

    // Rutas de perfil y configuración (placeholders)
    Route::get('/profile', function () {
        return view('profile.show');
    })->name('profile.show');

    Route::get('/profile/settings', function () {
        return view('profile.settings');
    })->name('profile.settings');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'welcome')->name('inicio'); // Blade
    Route::get('/acercade', 'acercaDe')->name('acercade'); // Blade
    // Route::get('/contacto', 'contacto')->name('contacto'); // livewire
    Route::get('/iconos', 'iconos')->name('iconos'); // Blade
    Route::get('/pruebas', 'pruebas')->name('pruebas'); // Blade
});
