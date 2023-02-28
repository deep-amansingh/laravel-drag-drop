<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Livewire\ShowTasks;
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

Route::get('/', [TaskController::class,'showTasks']);
Route::get('/task/create', [TaskController::class,'createTask']);
Route::post('/task/create', [TaskController::class,'saveTask']);
Route::get('/task/{task_id}', [TaskController::class,'editTask']);
Route::put('/task/{task_id}', [TaskController::class,'updateTask']);
