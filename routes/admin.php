<?php
// routes/admin.php
use App\Livewire\Admin\UserManager;
use Illuminate\Support\Facades\Route;

// Ruta para el dashboard de administración
Route::get('/dashboard', function () {
  return view('admin.dashboard');
})->name('dashboard');


// Rutas para la gestión de usuarios
Route::get('/users', UserManager::class)->name('users');
Route::get('/settings', UserManager::class)->name('settings');
