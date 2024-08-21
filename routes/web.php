<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculaController;
use App\Http\Controllers\VademecumController;

Route::get('/', function () { return view('pages.home'); })->name('home');
Route::get('/attivita', function () { return view('pages.activities'); })->name('activities');
Route::get('/contatti', function () { return view('pages.contacts'); })->name('contacts');
Route::get('/avvertenze', function () { return view('pages.warnings'); })->name('warnings');

Route::get('/curricula', [CurriculaController::class, 'index'])->name('curricula');
Route::get('/vademecum', [VademecumController::class, 'index'])->name('vademecum');
