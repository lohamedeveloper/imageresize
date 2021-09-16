<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResizeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/file-resize', [ResizeController::class, 'index']);
Route::post('resize-file', [ResizeController::class, 'resizeImage'])->name('resizeImage');
