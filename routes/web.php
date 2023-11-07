<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

// SOCIALTE ROUTES
use Laravel\Socialite\Facades\Socialite;

Route::get('/auth/redirect', [AuthController::class, 'redirect'])->name('auth.redirect');

Route::get('/auth/callback', [AuthController::class, 'callback'])->name('auth.callback');

// CALENDARIO

Route::post('/agregar', [EventoController::class, 'store'])->name('agregar');

Route::get('/mostrar', [EventoController::class, 'show'])->name('mostrar');

