<?php
use App\Http\Controllers\GyanDumyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



//Route::get('/data', [GyanDumyController::class, 'getData']);

Route::middleware(['check.session'])->get('/data', [GyanDumyController::class, 'getData']);