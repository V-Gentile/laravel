@extends('layout.app')

@section('content')
    <h1 style="color: #FF991A;">I Nostri Digimon</h1>
    
    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-top: 30px;">
        @foreach($digimons as $id => $digimon)
            <div style="border: 2px solid #FF991A; padding: 20px; border-radius: 10px; width: 200px; background-color: rgba(255, 255, 255, 0.1);">
                <img src="{{ asset('media/' . $digimon['immagine']) }}" alt="{{ $digimon['nome'] }}" style="width: 100%; height: 200px; object-fit: contain;">
                
                <h2>{{ $digimon['nome'] }}</h2>
                
                <a href="{{ route('digimon.dettaglio', ['id' => $id]) }}" style="color: #FF991A; text-decoration: none; font-weight: bold; padding: 10px; display: inline-block; border: 1px solid #FF991A; border-radius: 5px; margin-top: 10px;">
                    Leggi l'articolo
                </a>
            </div>
        @endforeach
    </div>
@endsection
