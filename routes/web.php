<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MineralController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Ruta API para un "Hello, World!"
Route::get('/hello', [App\Http\Controllers\HelloWorldController::class, 'index']);

Route::get('/register', function () {
    return view('welcome');
});

Route::get('/mineral', function () {
    return view('mineral');
});

Route::get('/mineral', [MineralController::class, 'index'])->name('mineral.index');

Route::delete('/mineral/{mineral}', [MineralController::class, 'destroy'])->name('mineral.destroy');

Route::put('/mineral/{mineral}', [MineralController::class, 'update'])->name('mineral.update');


Route::get('/crear-mineral', function () {
    return view('crear-mineral');
});

Route::post('/crear-mineral', [MineralController::class, 'crearmineral'])->name('crear-mineral');

Route::post('/guardar-mineral', [MineralController::class, 'guardarmineral'])->name('guardar-mineral');



require __DIR__.'/auth.php';
