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
    return view('students.form');
});



Route::get('/home', [App\Http\Controllers\AdminController::class, 'home'])->name('home');

Route::get('/form', function () {

    return view('students.form');
});

Route::get('/fdatas/create', [App\Http\Controllers\FdataController::class, 'create'])
    ->name('fdatas.create');
Route::post('/fdatas', [App\Http\Controllers\FdataController::class, 'store'])
    ->name('fdatas.store');


Route::post('/varifyStudent', [App\Http\Controllers\StudentController::class, 'varifyStudent'])
    ->name('varifyStudent');
Route::get('/getpass', [App\Http\Controllers\StudentController::class, 'getpass'])
    ->name('students.getpass');

Auth::routes();

Route::get('admin/dashboard', [App\Http\Controllers\AdminController::class, 'home'])
    ->name('dashboard');
Route::get('admin/students', [App\Http\Controllers\StudentController::class, 'index'])
    ->name('students.index')
    ->middleware('auth');


Route::get('admin/fdatas', [App\Http\Controllers\FdataController::class, 'index'])
    ->name('fdatas.index')
    ->middleware('auth');
Route::get('fdatas/{id}/update', [App\Http\Controllers\FdataController::class, 'update'])
    ->name('fdatas.update')
    ->middleware('auth');
Route::get('/fdatas/{id}', [App\Http\Controllers\FdataController::class, 'show'])
    ->name('fdatas.show')
    ->middleware('auth');
Route::get('fdatas/{id}/edit', [App\Http\Controllers\FdataController::class, 'edit'])
    ->name('fdatas.edit')
    ->middleware('auth');




Route::get('/admin/fdatasToCsv', [App\Http\Controllers\FdataController::class, 'fdatasToCsv'])
    ->name('fdatasToCsv')
    ->middleware('auth');
