<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// INSTRUCTIONS
Route::get('/', [EmployeeController::class,'index'])->name('home');
Route::get('employees',[EmployeeController::class,'index'])->name('employees.index');
Route::get('/employees/add', [EmployeeController::class, 'add'])->name('employees.add');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

