<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title' )</title>

    <link href="{{asset('css/style.css' )}}" rel="stylesheet">

    <script src="{{asset('Js/script.js')}}"></script>

</head>
<body>

<div>
    <div>
        <header>
            <div>
                <a class="logo" href="{{ route('Measurement.index') }}"><img src="{{ asset('images/lake.png') }}" alt="icon" style="width: 60px; height: 70px;"></a>
            </div>
            <div>
                <h3 class="title"> Záznamy merania teplôt jazier</h3>
            </div>
            <div>
                <a class="link" href="{{ route('Measurement.create') }}">Pridať záznam</a>
                <a class="link" href="{{ route('measurement.show', $measurement->id) }}">Admin</a>
            </div>
        </header>
    </div>

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
        Ukážkový a jednoduchý systém záznamu meraní v Laravel frameworku.  &copy; 2024
    </p>
</footer>

</body>
</html>
