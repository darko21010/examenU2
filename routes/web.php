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


Route::get('/', function () {
    return view('welcome');
}); 

*/
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');


use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

use App\Http\Controllers\PersonaController;

Route::get('/personas', [PersonaController::class, 'index'])->name('personas.options');
Route::get('/personas/show', [PersonaController::class, 'show'])->name('personas.show');
Route::get('/personas/create', [PersonaController::class, 'create'])->name('personas.create');

Route::post('/personas', [PersonaController::class, 'store'])->name('personas.store');