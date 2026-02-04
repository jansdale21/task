<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\WorkItemController;

Route::get('/', function () {
   return view('welcome');
});

Route::resource('tasks', TaskController::class);
Route::resource('authors', AuthorController::class);
Route::resource('descriptions', DescriptionController::class);
Route::resource('work-items', WorkItemController::class);