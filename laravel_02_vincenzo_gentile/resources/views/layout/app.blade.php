<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digimon Blog</title>
    <style>
        /* COLORI */
        body {
            background-color: #2D65B0; /* Blu */
            color: #FFFCFE; /* Bianco */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* NAVBAR */
        nav {
            background-color: #FF991A; /* Arancione */
            padding: 15px 30px;
            display: flex;
            align-items: center;
            gap: 20px;
        }
        nav img {
            height: 50px; /* Logo Agumon */
        }
        nav a {
            color: #2D65B0;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }
        nav a:hover {
            color: #FFFCFE;
        }

        /* STRUTTURA GENERALE */
        .container {
            max-width: 1000px;
            margin: 40px auto;
            text-align: center;
        }
    </style>
</head>
<body>

    <nav>
        <img src="{{ asset('media/logo agumon.png') }}" alt="Logo Agumon">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('chi-siamo') }}">Chi Siamo</a>
        <a href="{{ route('servizi') }}">Servizi</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
