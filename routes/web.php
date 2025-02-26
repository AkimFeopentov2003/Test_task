<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task1', function () {
    return view('task1');
})->name('task1');
Route::get('/task2', function () {
    return view('task2');
})->name('task2');
Route::post('/task2', [TaskController::class, 'processTask2']);
Route::get('/task3', [TaskController::class, 'task3'])->name('task3');
Route::get('/task4', [TaskController::class, 'task4'])->name('task4');
Route::get('/task5', [TaskController::class, 'task5'])->name('task5');
Route::get('/task6', function () {
    return view('task6');
})->name('task6');
Route::post('/task6', [TaskController::class, 'task6']);
Route::get('/task7', function () {
    return view('task7');
})->name('task7');
Route::post('/task7', [TaskController::class, 'task7']);
Route::get('/task8', [TaskController::class, 'task8'])->name('task8');
