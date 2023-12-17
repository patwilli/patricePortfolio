<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\downloadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/Accueil', function () {
    return view('index');
})->name('index');

Route::get('/Télechargement du CV',[downloadController::class,'telechargerCv'])->name('downloadcv');

Route::get('/A Propos', function () {
    return view('about');
})->name('a_propos');

Route::get('/Mes Services', function () {
    return view('service');
})->name('service');

Route::get('/Contactez-nous', function () {
    return view('contact');
})->name('contactez_moi');

Route::post('Envoie en cours',[ContactController::class,'sendingMsg'])->name('envoie_de_mail');




