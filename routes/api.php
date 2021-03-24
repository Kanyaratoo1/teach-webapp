<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [\App\Http\Controllers\PassPortController::class, 'login'])->name('login');

Route::middleware('auth:api')->get('/profile', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('logout', [App\Http\Controllers\PassportAuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth:api', 'prefix' => 'subjects'], function () {
    Route::get('/{id}/register', [\App\Http\Controllers\OnClassRoomsController::class, 'register_class_form_cloud'])->name('register_class_form_cloud');
    Route::get('/rooms', [\App\Http\Controllers\OnClassRoomsController::class, 'get_room'])->name('get_room_form_cloud');
});
