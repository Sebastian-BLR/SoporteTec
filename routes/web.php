<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SolicitudController;

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
    $inicioActive = 'active';
    return view('welcome', ['inicioActive' => $inicioActive]);
})->name('home'); 


Route::get( '/contacto',[ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto',[ContactoController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout.store');

Route::get('/dashboard/solicitud/{solicitud}', [SolicitudController::class, 'index'])->name('solicitud.index');
Route::delete('/dashboard/solicitud/delete/{solicitud}', [SolicitudController::class, 'delete'])->name('solicitud.delete');
Route::put('/dashboard/solicitud/update/{solicitud}', [SolicitudController::class, 'update'])->name('solicitud.update');


Route::get('/mensaje-exito', function () {
    return view('mensaje_exito');
})->name('mensaje_exito');


