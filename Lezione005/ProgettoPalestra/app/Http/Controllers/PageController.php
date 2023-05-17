<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // array corsi 
    public static $courses = 
                            [    'judo' => 'judo',
                                 'ginnastica' => 'ginnastica',
                                 'crossfit' => 'crossfit', 
                                 'aikido' => 'aikido'
                            ];

    // Route homepage 
    public function goToHomepage () {
        return view('homepage');
    }
    // Route course 
    public function goToCourse () {
        return view('course', ['corsi'=>self::$courses]);
    }
    // Route detail 
    public function goToDetail ($ref) {
        // ciclo singoli corsi per trovare corrispondenza con parametro $ref passato - {ref} in Route
        foreach (self::$courses as $course) {
            if ($course == $ref){
                return view('detail', ['course' => $course]);
            }
        } 
        // se non trova alcuna corrispondenza visualizza errore 404 
        abort(404);
    } 
    // Route contact 
    public function goToContact () {
        return view('contact');
    }
}
