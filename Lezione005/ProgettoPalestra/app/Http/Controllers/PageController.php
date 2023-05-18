<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request; // si attiva utilizzando Request nel metodo 
use Illuminate\Support\Facades\Mail;

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
    // Route contact GET
    public function goToContact () {
        return view('contact');
    }
    // Route contact POST
    public function send (Request $request) {
        // dd($request->name);
        // dd($request->all()); 

        // validazione dei dati 
        $request->validate([
            "name" => "required|string",
            "phone" => "required|numeric",
            "email" => "required|email",
            "message" => "required|min:10",
        ]);

        // array dei dati - mapping dei dati
        $data = [
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->input('email'),
            "message" => $request->message,
        ]; 
        // dd($data);

        Mail::to($request->input('email'))->send(new InfoMail($data));

        return redirect()
                        ->route('homepage')
                        ->with('success', 'Email inviata correttamente');
    }
}
