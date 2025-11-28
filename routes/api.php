<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;

Route::get('/questions', [QuestionController::class, 'index']);
Route::post('/questions', [QuestionController::class, 'store']);
Route::get('/questions/{id}', [QuestionController::class, 'show']);
Route::put('/questions/{id}', [QuestionController::class, 'update']);
Route::delete('/questions/{id}', [QuestionController::class, 'destroy']);

Route::get("/difficulties/{difficulty}", [QuestionController::class, 'difficulties']);
Route::get("/difficultiesWithAnswers/{difficulty}", [QuestionController::class, 'difficultiesWithAnswers']);

// 1. feladat: Pontok mentése
Route::post('/savePoints', [UserController::class, 'savePoints']);
// 2. Toplista
Route::get('/toplist', [UserController::class, 'topList']);
// 3. Maradék kérések?
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
