<?php

use App\Http\Controllers\SolicitudeController;
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
})->name('home'); 


Route::get( '/contacto',[SolicitudeController::class, 'index'])->name('contacto');
Route::post('/contacto',[SolicitudeController::class, 'store']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('auth.dashboard');
}); 