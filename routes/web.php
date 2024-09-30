<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('home');
});

Route::get('/newGame/{id}', [Controller::class, 'newGame'])->name('newGame');