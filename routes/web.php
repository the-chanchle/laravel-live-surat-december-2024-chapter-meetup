<?php

use App\Mail\ExampleMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KeystrokeController;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form/{form_type}', [FormController::class, 'index'])->name('form');
Route::post('/form/submit', [FormController::class, 'store'])->name('form.submit');
Route::get('health', HealthCheckResultsController::class);

Route::post('/save-keystroke', [KeystrokeController::class, 'store'])->name('save.keystroke');
