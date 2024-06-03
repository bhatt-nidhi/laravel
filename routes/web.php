<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello/trashed',[StudController::class,'trashed'])->name('hello.trashed');
Route::post('hello/restore',[StudController::class,'restore'])->name('hello.restore');
Route::resource('hello',StudController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
