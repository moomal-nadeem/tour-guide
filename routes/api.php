<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DealController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/createDeal', [DealController::class, 'createDeal']);
Route::get('/guides', [UserController::class, 'guides']);
Route::get('/guideVisit/{id}', [UserController::class, 'guideVisit']);
Route::get('ConfirmMail/{id}', [DealController::class, 'ConfirmMail']);