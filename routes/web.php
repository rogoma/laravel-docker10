<?php

use Illuminate\Support\Facades\Route;
use App\Mail\TestMail;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    // Mail::to('roberth.rodriguez@laravelthewebartisan.com')->send(new TestMail());
    Mail::to('rogoma007@gmail.com')->send(new TestMail());
    return response()->json('Mail enviado');
});
