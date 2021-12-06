<?php

use App\Http\Controllers\TodoHobbysController;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TodoMController;
use App\Http\Controllers\TodosController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/todolist', function () {
    return Inertia::render('components/ToDoList');
})->name('ToDoList');

// ToDo
Route::middleware(['auth:sanctum', 'verified'])->post('/todolist/store', [TodosController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('/todolist/show', [TodosController::class, 'show']);
Route::middleware(['auth:sanctum', 'verified'])->delete('/todolist/destroy/{todo}', [TodosController::class, 'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->post('/todolist/update/{todo}', [TodosController::class, 'update']);

// ToDoM
Route::middleware(['auth:sanctum', 'verified'])->post('/todomlist/store', [TodoMController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('/todomlist/show', [TodoMController::class, 'show']);

// ToHobby
Route::middleware(['auth:sanctum', 'verified'])->post('/tohobbylist/store', [TodoHobbysController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('/tohobbylist/show', [TodoHobbysController::class, 'show']);

//ToDoList
Route::middleware(['auth:sanctum', 'verified'])->get('/todolistl/show', [TodoListController::class, 'show']);
