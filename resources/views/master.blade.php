<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title' )</title>

    <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">

    <script src="{{asset('resources/js/contact.js')}}"></script>

</head>
<body>
<div>
    <header>
        <a href="{{ route('Measurement.index') }}"><img src="{{ asset('images/lake.png') }}" alt="icon" style="width: 60px; height: 70px;"></a>
        <h4> Záznamy merania teplôt jazier</h4>

        <a href="{{ route('Measurement.create') }}">Pridať záznam</a>
        <a href="{{ route('measurement.show', $measurement->id) }}">Admin</a>
    </header>

    @if ($errors->any())
        <div>
            <ul >
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>

<footer>
    <p >
        Ukážkový a jednoduchý systém záznamu meraní v Laravel frameworku.
    </p>
</footer>

<style>
    table {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    /* Formátovanie pre hlavičku tabuľky */
    th {
        background-color: #9c5252;
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    /* Formátovanie pre riadky tabuľky */
    td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    /* Párové riadky tabuľky môžete zvýrazniť */
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    footer {
        background-color: #f0f0f0;
        color: #333;
        font-family: Arial, sans-serif;
        font-size: 16px;
        padding: 10px;
        font-style: italic;
        font-align: center;
    }

</style>
</body>
</html>
