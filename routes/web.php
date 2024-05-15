<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\dashboardController;

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


Route::get('/', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth', 'verified'])
->name('dashboard');

Route::get('/ajoutPersonnel', [dashboardController::class, 'create'])
->name('ajoutPersonnel');

Route::post('/inserePersonnel', [dashboardController::class, 'store'])
->name('inserePersonnel');

Route::get('/modifiPersonnel', [dashboardController::class, 'edit'])
->name('modifiPersonnel');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
