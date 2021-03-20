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
Route::get('/adminstrator', [App\Http\Controllers\AdministratorController::class, 'index'])->name('administrator');
Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'index'])->name('teacher');
Route::get('student', function() {
    return view('admin.student');
});

Route::get('teachers', function() {
    return view('admin.teachers');
});

Route::get('subjects', function() {
    return view('admin.subjects');
});

Route::get('rooms', function() {
    return view('admin.rooms');
});

Route::get('results', function() {
    return view('admin.results');
});
