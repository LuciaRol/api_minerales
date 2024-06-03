<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;
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




Route::get('/register', function () {
    return view('welcome');
});


Route::get('/crear-cita', function () {
    return view('crear-cita');
});

Route::post('/crear-cita', [CitaController::class, 'crearCita'])->name('crear-cita');

Route::post('/guardar-cita', [CitaController::class, 'guardarCita'])->name('guardar-cita');

Route::get('/crear-cliente', [ClienteController::class, 'create'])->name('crear-cliente');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');

Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

Route::get('/mineral', function () {
     return view('mineral');
});

Route::get('/mineral', [MineralController::class, 'index'])->name('mineral.index');

Route::delete('/mineral/{mineral}', [MineralController::class, 'destroy'])->name('mineral.destroy');

Route::put('/mineral/{mineral}', [MineralController::class, 'update'])->name('mineral.update');



Route::get('/ver-clientes', [ClienteController::class, 'index'])->name('clientes.index');


Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');



require __DIR__.'/auth.php';
