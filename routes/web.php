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
use App\Http\Controllers\AlumnoController;

Route::get('/alumnos', [AlumnoController::class, 'showOptions'])->name('alumnos.options'); //MENU DE OPCIONES ALUMNOS
Route::get('/alumnos/list', [AlumnoController::class, 'index'])->name('alumnos.index');//LISTADO DE ALUMNOS
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');//AGREGAR ALUMNOS 

Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store'); // VA DE LA MANO PARA AGREGAR ALUMNOS

//PARA EDITAR SEGUN EL ID
Route::get('/alumnos/{nPerCodigo}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::patch('/alumnos/{nPerCodigo}', [AlumnoController::class, 'update'])->name('alumnos.update');

Route::get('/alumnos/search', function () {
    return view('alumnos.search');
})->name('alumnos.search');
Route::post('/alumnos/findForEdit', [AlumnoController::class, 'findForEdit'])->name('alumnos.findForEdit');

Route::delete('/alumnos/{nPerCodigo}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');


Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
