<?php

use App\Http\Controllers\ObatController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ObatController::class, 'index']);
Route::get('/create', [ObatController::class, 'create']);
Route::post('/create', [ObatController::class, 'inputCreate'])->name('inputCreate');

Route::delete('/delete/{id}', [ObatController::class, 'destroy']);

Route::post('/edit/{id}', [ObatController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ObatController::class, 'update'])->name('update');
