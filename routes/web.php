<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\todo\todoController;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/dashboard',[dashboardController::class,'index'])->name('dashboard');

Route::get('/todo',[todoController::class,'index'])->name('todo');
Route::post('/todo',[todoController::class,'store'])->name('todo.post');
Route::put('/todo/{id}',[todoController::class,'update'])->name('todo.update');
Route::delete('/todo/{id}',[todoController::class,'destroy'])->name('todo.delete');

Route::get('/login',[loginController::class,'index']);

Route::get('/karyawan',[karyawanController::class,'index'])->name('karyawan');

