<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PageController;    // importare il file es. PageController 

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

Route::get('/', [PageController::class, 'goToHomepage']) -> name('homepage'); 

Route::get('/detail', [PageController::class, 'goToDetail']) -> name('detail'); 

