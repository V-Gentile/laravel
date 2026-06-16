@extends('layout.app')

@section('content')
    <h1 style="color: #FF991A; font-size: 40px;">{{ $digimon['nome'] }}</h1>
    
   <img src="{{ asset('media/' . $digimon['immagine']) }}" alt="{{ $digimon['nome'] }}" style="width: 100%; height: 300px; object-fit: contain; border-bottom: 5px solid #FF991A; padding-bottom: 20px; margin-top: 20px;">
    
    <p style="margin-top: 30px; font-size: 18px; text-align: left; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6; background-color: rgba(255, 255, 255, 0.05); padding: 20px; border-radius: 10px;">
        <strong>Identikit di {{ $digimon['nome'] }}:</strong><br><br>
        {{ $digimon['descrizione'] }}
    </p>
    
    <div style="margin-top: 40px;">
        <a href="{{ route('home') }}" style="color: #2D65B0; background-color: #FF991A; padding: 10px 20px; text-decoration: none; font-weight: bold; border-radius: 5px;">
            Torna alla Home
        </a>
    </div>
@endsection
