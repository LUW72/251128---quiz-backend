<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/questions', [QuestionController::class, 'index']);
Route::post('/questions', [QuestionController::class, 'store']);
Route::get('/questions/{id}', [QuestionController::class, 'show']);
Route::put('/questions/{id}', [QuestionController::class, 'update']);
Route::delete('/questions/{id}', [QuestionController::class, 'destroy']);

Route::get("/difficulties/{difficulty}", [QuestionController::class, 'difficulties']);
Route::get("/difficultiesWithAnswers/{difficulty}", [QuestionController::class, 'difficultiesWithAnswers']);