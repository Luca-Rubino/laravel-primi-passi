<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $iHome = [
        'titolo' => 'Hello World'
    ];
    return view('home', $iHome);
})->name('home');

Route::get('/about', function () {
    $aboutInfo = [
        "name" => 'Griffith',
        "generate" => 'Eclissi'
    ];

    return view('about-me', $aboutInfo);
})->name('about');

Route::get('/contact', function () {
    $contactInfo = [
        "frase" => 'io... vi CONSACRO'
    ];

    return view('contact', $contactInfo);
})->name('contact');
