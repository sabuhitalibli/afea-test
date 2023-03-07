<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
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

Route::resource('questions', QuestionController::class)
    ->except(['show'])
    ->names([
        'index' => 'questions.index',
        'create' => 'questions.create',
        'store' => 'questions.store',
        'edit' => 'questions.edit',
        'update' => 'questions.update',
        'destroy' => 'questions.delete',
    ]);

Route::get('/', [ExamController::class, 'index'])->name('exam.index');

Route::post('/', [ExamController::class, 'calculate'])->name('exam.calculate');
