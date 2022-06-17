<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/invitado',function ()
{
    return view('ejemplo.invitado');
})->name('ejemplo.invitado')->middleware(['auth', 'can:solo-admin']);


Route::get('/ejemplo',function ()
{
    return view('ejemplo.index');
})->name('ejemplo.index');

Route::get('/carritos', [CarritoController::class, 'index'])
->middleware(['auth'])->name('carrito');
