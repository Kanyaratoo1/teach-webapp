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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/administrator', [App\Http\Controllers\AdministratorController::class, 'index'])->name('administrator');
Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'index'])->name('teacher');


//ส่วนของ Administrator
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student');
Route::get('/student/add', [App\Http\Controllers\StudentController::class, 'create'])->name('create student');
Route::post('/student/add', [App\Http\Controllers\StudentController::class, 'store'])->name('post student');
Route::get('/student/{id}', [App\Http\Controllers\StudentController::class, 'show'])->name('show student');
Route::post('/student/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('update student');

Route::get('/teachers', [\App\Http\Controllers\TeachersController::class, 'index'])->name('teachers');
Route::get('/teachers/add', [\App\Http\Controllers\TeachersController::class, 'create'])->name('create teachers');
Route::get('/teachers/{id}/show', [\App\Http\Controllers\TeachersController::class, 'show'])->name('show teachers');
Route::get('/teachers/{id}/delete', [\App\Http\Controllers\TeachersController::class, 'destroy'])->name('delete teachers');
Route::post('/teachers/add', [\App\Http\Controllers\TeachersController::class, 'store'])->name('post teachers');
Route::post('/teachers/{user_id}/{teacher_id}/edit', [\App\Http\Controllers\TeachersController::class, 'update'])->name('edit teachers');

Route::get('/subjects', [\App\Http\Controllers\SubjectsController::class, 'index'])->name('subjects');
Route::get('/subjects/add', [\App\Http\Controllers\SubjectsController::class, 'create'])->name('create subjects');
Route::post('/subjects/add', [\App\Http\Controllers\SubjectsController::class, 'store'])->name('post subjects');
Route::get('/subjects/{id}', [\App\Http\Controllers\SubjectsController::class, 'show'])->name('show subjects');
Route::post('/subjects/{id}', [\App\Http\Controllers\SubjectsController::class, 'update'])->name('update subjects');

Route::get('/rooms', [\App\Http\Controllers\ClassRoomsController::class, 'index'])->name('rooms');
Route::get('/rooms/add', [\App\Http\Controllers\ClassRoomsController::class, 'create'])->name('create room');
Route::post('/rooms/add', [\App\Http\Controllers\ClassRoomsController::class, 'store'])->name('post room');
Route::get('/rooms/{id}', [\App\Http\Controllers\ClassRoomsController::class, 'show'])->name('show room');
Route::post('/rooms/{id}', [\App\Http\Controllers\ClassRoomsController::class, 'update'])->name('update room');
Route::get('/rooms/{id}/delete', [\App\Http\Controllers\ClassRoomsController::class, 'destroy'])->name('delete room');

Route::get('/subroom', [\App\Http\Controllers\SubjectRoomsController::class, 'index'])->name('subroom');
Route::get('/subroom/add', [\App\Http\Controllers\SubjectRoomsController::class, 'create'])->name('create subroom');
Route::post('/subroom/add', [\App\Http\Controllers\SubjectRoomsController::class, 'store'])->name('post subroom');
Route::get('/subroom/{id}', [\App\Http\Controllers\SubjectRoomsController::class, 'show'])->name('show subroom');
Route::post('/subroom/{id}', [\App\Http\Controllers\SubjectRoomsController::class, 'update'])->name('update subroom');
Route::get('/subroom/{id}/delete', [\App\Http\Controllers\SubjectRoomsController::class, 'destroy'])->name('delete subroom');

//---------------------------->

//สำหรับนักเรียน

Route::get('/sublist',[\App\Http\Controllers\OnClassRoomsController::class, 'sublist'])->name('sublist');
Route::get('/sublist/{id}',[\App\Http\Controllers\OnClassRoomsController::class, 'get_sublist'])->name('select_sublist');
Route::get('/sublist/{id}/register',[\App\Http\Controllers\OnClassRoomsController::class, 'register_subjects'])->name('register_subjects');
Route::post('/sublist/{id}/register',[\App\Http\Controllers\OnClassRoomsController::class, 'register_to_classroom'])->name('register_to_classroom');
Route::get('/checkrooms',[\App\Http\Controllers\OnClassRoomsController::class, 'checkrooms'])->name('checkrooms');
Route::get('/onroom',[\App\Http\Controllers\OnClassRoomsController::class, 'subroom'])->name('onroom');


#Get Member
Route::get('/member/{username}/{passwd}/login', [\App\Http\Controllers\GetStudentController::class, 'LogIn'])->name('get_member');
Route::get('/member/{username}/room', [\App\Http\Controllers\GetStudentController::class, 'GetCheckIn'])->name('check_room');
Route::get('/member/{id}/{username}', [\App\Http\Controllers\GetStudentController::class, 'CheckInRoom'])->name('check_in_room');
Route::get('/member/{username}', [\App\Http\Controllers\GetStudentController::class, 'GetTeach'])->name('get_teach_room');
Route::get('/room/{username}', [\App\Http\Controllers\GetStudentController::class, 'GetTeachView'])->name('get_teach_view_room');
