<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\attendanceController;


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

// Route::get('/history', function () {
//     return view('history');
// })->name('history');

Route::get('/history', [attendanceController::class, 'fetchDate'])->name('history');
//getDateMonth
Route::post('/getDateMonth', [attendanceController::class, 'getDateMonth'])->name('getDateMonth');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/checkCurrentDay',[App\Http\Controllers\attendanceController::class,'checkCurrentDay'])->name('checkCurrentDay');
//POST
Route::post('/submitAttendance', [App\Http\Controllers\attendanceController::class, 'submitAttendance'])->name('submitAttendance');
Route::patch('/updateProfile/{id}',[App\Http\Controllers\userController::class, 'updateProfile'])->name('updateProfile');


// Define routes for each month
Route::get('/january', [attendanceController::class, 'historyJan'])->name('january');
Route::get('/february', [attendanceController::class,'historyFeb'])->name('february');
Route::get('/march', [attendanceController::class,'historyMar'])->name('march');
Route::get('/april', [attendanceController::class,'historyApr'])->name('april');
Route::get('/may', [attendanceController::class,'historyMay'])->name('may');
Route::get('/june', [attendanceController::class,'historyJun'])->name('june');
Route::get('/july', [attendanceController::class,'historyJul'])->name('july');
Route::get('/august', [attendanceController::class,'historyAug'])->name('august');
Route::get('/september',[attendanceController::class,'historySep'])->name('september');
Route::get('/october', [attendanceController::class,'historyOct'])->name('october');
Route::get('/november', [attendanceController::class,'historyNov'])->name('november');
Route::get('/december', [attendanceController::class,'historyDec'])->name('december');






