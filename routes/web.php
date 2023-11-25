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
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/viewTodayHistory',[App\Http\Controllers\attendanceController::class, 'getTodayHistory'])->name('viewTodayHistory');

//POST
Route::post('/submitAttendance', [App\Http\Controllers\attendanceController::class, 'submitAttendance'])->name('submitAttendance');

