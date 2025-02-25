<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'welcome')->name('inicio'); // Blade
    Route::get('/acercade', 'acercaDe')->name('acercade'); // Blade
    // Route::get('/contacto', 'contacto')->name('contacto'); // livewire
    Route::get('/iconos', 'iconos')->name('iconos'); // Blade
    Route::get('/pruebas', 'pruebas')->name('pruebas'); // Blade
});
