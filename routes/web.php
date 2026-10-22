<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/question/store', [QuestionController::class, 'store'])
    ->name('question.store');

    Route::get('/question/response', function () {
    return view('home-question-respon', [
        'data' => session('data')
    ]);
})->name('question.response');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard.index');