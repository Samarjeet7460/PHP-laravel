<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'showForm']);
Route::post('/submit-form', [FormController::class, 'handleForm']);
Route::get('/display', [FormController::class, 'displayData'])->name('display');

?>