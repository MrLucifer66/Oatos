<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ModerateNewsAPIController;

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

Route::post('/moderate-news', [ModerateNewsAPIController::class, 'store'])->name('api.moderate-news.store');
Route::get('/events', [EventsApiController::class, 'index']);
Route::post('/events', [EventsApiController::class, 'store']);
Route::put('/events/{id}', [EventsApiController::class, 'update']);
Route::delete('/events/{id}', [EventsApiController::class, 'destroy']);