<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/administrator', [App\Http\Controllers\AdministratorController::class, 'index'])->name('administrator');
Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'index'])->name('teacher');

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student');
Route::get('/student/add', [App\Http\Controllers\StudentController::class, 'create'])->name('create student');
Route::post('/student/add', [App\Http\Controllers\StudentController::class, 'store'])->name('post student');
Route::get('/student/{id}', [App\Http\Controllers\StudentController::class, 'show'])->name('show student');
Route::post('/student/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('update student');

Route::get('/teachers', [\App\Http\Controllers\TeachersController::class, 'index'])->name('teachers');
Route::get('/teachers/add', [\App\Http\Controllers\TeachersController::class, 'create'])->name('create teachers');
Route::post('/teachers/add', [\App\Http\Controllers\TeachersController::class, 'store'])->name('post teachers');

Route::get('subjects', function() {
    return view('admin.subjects');
});

Route::get('rooms', function() {
    return view('admin.rooms');
});

Route::get('results', function() {
    return view('admin.results');
});
