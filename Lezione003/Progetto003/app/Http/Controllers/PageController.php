<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static $flights =    [
        "departure" => [
            [
                "id" => 29,
                "city" => "Parigi",
                "time" => "15:30",
                "company" => "RyanAir",
                "gate" => 17,
                "seats" => [
                    "total" => 350,
                    "occupied" => 350,
                ],
                "cover" => "https://picsum.photos/600/400",
            ],
            [
                "id" => 11,
                "city" => "Lourdes",
                "time" => "11:30",
                "company" => "Jesus Airlines",
                "gate" => 13,
                "seats" => [
                    "total" => 156,
                    "occupied" => 150,
                ],
                "cover" => "https://picsum.photos/600/400",
            ],
            [
                "id" => 45,
                "city" => "Francoforte",
                "time" => "19:30",
                "company" => "RyanAir",
                "gate" => 17,
                "seats" => [
                    "total" => 190,
                    "occupied" => 145,
                ],
                "cover" => "https://picsum.photos/600/400",
            ]
        ],
        "arrival" => [
            [
                "id" => 56,
                "city" => "Rotterdam",
                "time" => "11:30",
                "company" => "Norwegian",
                "gate" => 1,
                "cover" => "https://picsum.photos/600/400",
            ],
            [
                "id" => 78,
                "city" => "Dublino",
                "time" => "15:30",
                "company" => "EasyJet",
                "gate" => 3,
                "cover" => "https://picsum.photos/600/400",
            ],
            [
                "id" => 101,
                "city" => "Parigi",
                "time" => "19:30",
                "company" => "Air France",
                "gate" => 3,
                "cover" => "https://picsum.photos/600/400",
            ],
        ],
    ];



    public function goToHomepage()
    {
        return view('homepage', ['flights' => self::$flights]);     // passo come secondo parametro l'array $flights, dandogli nome 'flights', che richiamerò nella view homepage 
    }

    public function goToDetail($ref)    // dettagli singolo volo 
    {
        // cicli distinti Partenze/Arrivi singoli voli 
        foreach (self::$flights['departure'] as $flightDeparture) {
            // dd($ref);
            if ($ref == $flightDeparture['id']) {
                return view('detail', ['flightDetail' => $flightDeparture]);    // ATTENZIONE al numero di parametri passati (vedi documentazione)
                // return view('detail', ['flights' => 'departure', 'flightDetail' => $flightDeparture]);
            }
        }

        foreach (self::$flights['arrival'] as $flightArrival) {
            // dd($ref);
            if ($ref == $flightArrival['id']) {
                return view('detail', ['flightDetail' => $flightArrival]);
                // return view('detail', ['flights' => 'arrival', 'flightDetail' => $flightArrival]);
            }
        }
    }
}
