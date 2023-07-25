<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/view', [FileController::class, 'view'])
    ->name('file.view');
Route::get('/file', [FileController::class, 'showUploadedFiles'])
    ->name('file.showUploadedFiles');
Route::get('/', [FileController::class, 'index'])
    ->name('file.index');
Route::post('/upload', [FileController::class, 'upload'])
    ->name('file.upload');
Route::get('/uploaded-files', [FileController::class, 'showUploadedFiles'])
    ->name('uploaded.files');
Route::get('/file/share/{id}', [FileController::class, 'shareFile'])
    ->name('file.share');
Route::get('/file/download/{id}', [FileController::class, 'downloadFile'])
    ->name('file.download');
