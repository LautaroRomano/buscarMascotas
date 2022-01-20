<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\KeysController;
use App\Http\Controllers\VacunasController;
use App\Http\Controllers\HistclinicoController;



Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('home');

//Login y registro
Route::get('/login', [SessionController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest') 
    ->name('register.index'); 

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.index');

Route::post('/login', [SessionController::class, 'store'])
    ->name('login.index');

Route::get('/logout', [SessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');
 
//mascotas
Route::get('/mascotas/register/{key}',[KeysController::class, 'getKey' ])->middleware('auth');

Route::resource('mascotas',MascotasController::class); 

//vacunas
Route::resource('vacunas',VacunasController::class); 

//veterinario
Route::resource('veterinario',HistclinicoController::class); 


//generar key 
Route::get('/generarkey',[KeysController::class, 'generarKey' ])->middleware('auth');

//escanear qr 
Route::get('escaner', function (){
    return view('escanerqr.escaner'); 
})->name('escanerqr');