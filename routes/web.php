<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});


// routes/web.php
Route::get('/admin/pages/create', [PageController::class, 'create'])->name('pages.create');
Route::post('/admin/pages', [PageController::class, 'store'])->name('pages.store');
Route::get('/{slug}', [PageController::class, 'show'])->name('pages.show');

Route::get('/admin/pages', [PageController::class, 'index'])->name('pages.index');
Route::get('/admin/pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
Route::put('/admin/pages/{page}', [PageController::class, 'update'])->name('pages.update');
Route::delete('/admin/pages/{page}', [PageController::class, 'destroy'])->name('pages.destroy');
