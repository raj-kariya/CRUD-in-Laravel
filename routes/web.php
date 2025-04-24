<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee',[EmpController::class, 'show'])->name('employee.show');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');


Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');


Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show'); //Considered adding this, even if not in original


Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update'); // Added this line


Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Route::resource('notes', NoteController::class);
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
Route::resource('notes', NoteController::class);
