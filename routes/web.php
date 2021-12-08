<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\DepartmentController;

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
    return view('welcome');
});

Route::prefix('/todo')->group(function(){
    Route::get('/index', function(){
        return TodoController::index();
    })->name('todo.index');

    Route::get('/create', [TodoController::class, 'create'])->name('todo.create');
});

Route::resource('friends', FriendController::class);

Route::prefix('/department')->group(function(){
    Route::get('/', [DepartmentController::class, 'index']);
    Route::get('/create', [DepartmentController::class, 'create']);
    Route::get('/store', [DepartmentController::class, 'store']);
    Route::get('/update', [DepartmentController::class, 'update']);
    Route::get('/edit', [DepartmentController::class, 'edit']);
    Route::get('/show', [DepartmentController::class, 'show']);
    Route::get('/destroy', [DepartmentController::class, 'destroy']);
});