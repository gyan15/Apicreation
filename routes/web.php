<?php

use App\Http\Controllers\CloseLimitationController;
use Illuminate\Support\Facades\Route;

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

Route::post('/close-previous-session', [CloseLimitationController::class, 'closePreviousSession']);

Route::get('/new-session', function () {
    return view('Closesession');
});