<?php
// routes/admin.php

// actualisado en el archivo: bootstrap/app.php
// ->prefix('admin')
// ->name('admin.') por lo tanto no debo incluirlo aquí
//
// use App\Livewire\Admin\UserManager;

use App\Livewire\menus\AdminNav;
use Illuminate\Support\Facades\Route;

// Ruta para el dashboard de administración
Route::get('/', function () {
  return view('admin.dashboard');
})->name('dashboard');


// Rutas para la gestión de usuarios
// Route::get('/users', UserManager::class)->name('users');
// Route::get('/settings', UserManager::class)->name('settings');

// Ruta para la navegación de administración
Route::get('/nav', AdminNav::class)->name('nav');
