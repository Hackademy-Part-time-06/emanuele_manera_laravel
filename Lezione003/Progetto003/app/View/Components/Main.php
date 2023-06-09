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
        return view('template.main');   // percorso: Lezione003/Progetto003/resources/views/template/main.blade.php 
        // il componente main mi serve per indirizzare ad una cartella differente da components 
    }
}
