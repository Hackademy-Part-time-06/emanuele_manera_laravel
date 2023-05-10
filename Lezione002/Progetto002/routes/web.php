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
    return view('index');
});

Route::get('/azienda', function () {
    return view('about');
});

Route::get('/destinazioni', function () {

    $destination = ['Roma', 'Milano', 'Bari', 'Amsterdam', 'Napoli', 'Praga'];     // array delle destinazioni 

    return view('destination', ['city' => $destination]);
});

Route::get('/contatti', function () {
    return view('contact');
});

Route::get('/destinazioni/{destinazione}', function ($city) {
    return ucfirst($city);
});
