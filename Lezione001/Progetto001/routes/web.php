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
    return view('welcome');
});

Route::get('/stringa', function(){
    return 'Sono un esempio di stringa sul tuo browser!';
}); 

Route::get('/intero', function(){
    return 42; 
}); 

Route::get('/elemento array', function(){   // funziona inserendo carattere speciale spazio. URI: /elemento%20array
    $fruttaDiStagione = ['pesca', 'ananas', 'banana']; 
    return $fruttaDiStagione[2];
}); 

Route::get('/chi-siamo', function(){
    return view('chisiamo');
}); 

Route::get('/contatti', function(){
    return view('contatti');
}); 

Route::get('/storia', function(){
    return view("storia");
}); 

