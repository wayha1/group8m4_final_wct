<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');



// Route::get('contact', [ContactFormController::class, 'showForm'])->name('contactform.show');
// Route::post('contact', [ContactFormController::class, 'submitForm'])->name('contactform.submit');
// Route::get('thank-you', [ContactFormController::class, 'thankYou'])->name('contactform.thankyou');
