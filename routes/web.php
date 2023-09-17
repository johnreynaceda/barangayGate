<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    if (auth()->user()->is_admin == true) {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('resident.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

//admin routes
Route::prefix('administrator')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    Route::get('/bgry-official', function () {
        return view('admin.official');
    })->name('admin.official');
    Route::get('/residents', function () {
        return view('admin.residents');
    })->name('admin.residents');
    Route::get('/blotter', function () {
        return view('admin.blotter');
    })->name('admin.blotter');
    Route::get('/certificates', function () {
        return view('admin.certificates');
    })->name('admin.certificates');
});

//resident routes
Route::prefix('resident')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->resident != null) {
            return view('resident.index');
        } else {
            return view('resident.form');
        }
    })->name('resident.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';