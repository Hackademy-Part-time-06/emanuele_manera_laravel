<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PageController;

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

// homepage 
Route::get('/', [PageController::class, 'goToHomepage']) -> name('homepage');
// course 
Route::get('/corsi', [PageController::class, 'goToCourse']) -> name('course'); 
// detail, pagina astratta per singolo corso. Parametro passato {ref} 
Route::get('/corso/{ref}', [PageController::class, 'goToDetail']) -> name('detail'); // i parametri (es. {ref}), salvo casi particolari, vanno con GET 
// contact 
Route::get('/contatti', [PageController::class, 'goToContact']) -> name('contact'); // rotta in GET 
Route::post('/send', [PageController::class, 'send']) -> name('send'); // rotta in POST per la gestione dei dati 
// thankyou
Route::get('/grazie', function(){
    return 'Grazie';
})->name('thankyou');