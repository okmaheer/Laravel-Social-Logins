<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('auth/google/redirect', [AuthController::class, 'googleRedirect'])->name('google.redirect');
Route::get('auth/google/callback', [AuthController::class, 'googleCallback'])->name('google.callback');

Route::get('auth/github/redirect', [AuthController::class, 'githubRedirect'])->name('github.redirect');
Route::get('auth/github/callback', [AuthController::class, 'githubCallback'])->name('github.callback');
Route::get('/', function () {
    return view('welcome');
});


Route::get('/dash', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
