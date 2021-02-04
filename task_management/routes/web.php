<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

//tao group route tasks
Route::group(['prefix' => 'tasks'], function () {
    Route::get('/',[\App\Http\Controllers\TaskController::class,'index'])->name('tasks.index');
    Route::get('/create',[\App\Http\Controllers\TaskController::class,'create'])->name('tasks.create');
    Route::post('/create',[\App\Http\Controllers\TaskController::class,'store'])->name('tasks.store');
    Route::get('/{id}/edit',[\App\Http\Controllers\TaskController::class,'edit'])->name('tasks.edit');
    Route::post('/{id}/edit',[\App\Http\Controllers\TaskController::class,'update'])->name('tasks.update');
    Route::get('/{id}/destroy',[\App\Http\Controllers\TaskController::class,'destroy'])->name('tasks.destroy');
});
