<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ParchmentController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TomeController;
use App\Http\Controllers\ExamController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function (){
    Route::resource('notes',NoteController::class);
    Route::resource('tasks',TaskController::class);
    Route::resource('tomes',TomeController::class);
    Route::resource('parchments',ParchmentController::class);
    Route::resource('Exams',ExamController::class);
});
