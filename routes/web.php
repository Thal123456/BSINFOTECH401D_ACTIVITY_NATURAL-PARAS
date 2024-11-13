<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; // to use and connect this folder inside


Route::get('/', [StudentController::class, 'index'])->name('students.index');

Route::get('/create', [StudentController::class, 'create'])->name('students.create');

Route::post('/store', [StudentController::class, 'store'])->name('students.store');

Route::get('/{id}', [StudentController::class, 'show'])->name('students.show');

Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/{id}', [StudentController::class, 'update'])->name('students.update');

Route::delete('/{id}', [StudentController::class, 'destroy'])->name('students.destroy');