<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pokemonIndex () {
        // Lezione007/PalestraPokemon/resources/views/pokemon/index.blade.php 
        return view('pokemon.index');
    } 

    public function pokemonShow ($id) {
        // Lezione007/PalestraPokemon/resources/views/pokemon/show.blade.php 
        return view('pokemon.show', ['id'=>$id]);
    } 


}
