<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'FE Startup']);
})->name('home');

Route::get('/page', function () {
    return view('page', ['title' => 'Page']);
})->name('page');
