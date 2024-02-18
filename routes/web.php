<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\FormController;
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


Route::get('/form', [FormController::class, 'showForm']);
Route::post('/submit-form', [FormController::class, 'submitForm']);

Route::get('/success', function () {
    return view('forms.success');
})->name('success');




Route::get('/', function () {
    return view('welcome');
});
Route::get('/ler-imagem', [ImageController::class, 'readImage']);