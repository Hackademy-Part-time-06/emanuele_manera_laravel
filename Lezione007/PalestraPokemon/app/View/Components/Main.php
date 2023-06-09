<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // Lezione007/PalestraPokemon/resources/views/
        // layouts/main
        // .blade.php 
        // Lezione007/PalestraPokemon/resources/views/pokemon/index.blade.php 
        // Lezione007/PalestraPokemon/resources/views/template/main.blade.php

        return view('template.main');
    }
}
