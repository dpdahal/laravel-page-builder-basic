<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Backend\Ckeditor\CkeditorController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('backend.pages.dashboard.index');
});

Route::post('ckeditor-image-upload', [CkeditorController::class, 'index'])->name('ckeditor.upload');

// routes/web.php
Route::get('/admin/pages/create', [PageController::class, 'create'])->name('pages.create');
Route::post('/admin/pages', [PageController::class, 'store'])->name('pages.store');
Route::get('/{slug}', [PageController::class, 'show'])->name('pages.show');

Route::get('/admin/pages', [PageController::class, 'index'])->name('pages.index');
Route::get('/admin/pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
Route::put('/admin/pages/{page}', [PageController::class, 'update'])->name('pages.update');
Route::delete('/admin/pages/{page}', [PageController::class, 'destroy'])->name('pages.destroy');
