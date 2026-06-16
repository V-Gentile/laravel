<?php

use Illuminate\Support\Facades\Route;

// Array con i dati dei nostri 4 Digimon
$digimons = [
    'agumon'   => [
        'nome' => 'Agumon', 
        'immagine' => 'agumon.png', 
        'descrizione' => 'Agumon è un Digimon rettile e il fedele partner di Tai Kamiya. È sempre affamato, coraggioso e pronto a proteggere i suoi amici. La sua mossa speciale è il Baby Flame (Baby Meteora)!'
    ],
    'veemon'   => [
        'nome' => 'Veemon', 
        'immagine' => 'veemon.png', 
        'descrizione' => 'Veemon è un piccolo e vivace Digimon drago, compagno di Davis Motomiya. È in grado di utilizzare il potere delle Digiuova per effettuare le Armordigievoluzioni.'
    ],
    'guilmon'  => [
        'nome' => 'Guilmon', 
        'immagine' => 'guilmon.png', 
        'descrizione' => 'Creato dalla fantasia di Takato Matsuki, Guilmon è un Digimon con un enorme potenziale distruttivo, ma con la mentalità innocente di un cucciolo curioso.'
    ],
    'shoutmon' => [
        'nome' => 'Shoutmon', 
        'immagine' => 'shoutmon.png', 
        'descrizione' => 'Il futuro Re dei Digimon! Accompagnato da Taiki Kudo, Shoutmon è un Digimon super energico, e appassionato di musica, armato di un microfono che usa come bastone in combattimento.'
    ],
];

Route::get('/', function () use ($digimons) {
    return view('home', ['digimons' => $digimons]);
})->name('home');

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');

Route::get('/servizi', function () {
    return view('servizi');
})->name('servizi');

// Rotta parametrica per il singolo articolo
Route::get('/digimon/{id}', function ($id) use ($digimons) {
    // Se l'id non esiste nell'array, diamo errore 404
    if (!array_key_exists($id, $digimons)) {
        abort(404);
    }
    return view('dettaglio', ['digimon' => $digimons[$id]]);
})->name('digimon.dettaglio');
