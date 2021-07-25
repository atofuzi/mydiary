<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

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


Route::get('/write', function () {
    return view('write');
});

Route::get('/home', [DiaryController::class, 'index']);
Route::get('/record', [DiaryController::class, 'show']);
Route::post('/diary-register', [DiaryController::class, 'diaryRegister']);
Route::get('/edit/{id}', [DiaryController::class, 'edit']);
Route::post('/update/{id}', [DiaryController::class, 'update']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
