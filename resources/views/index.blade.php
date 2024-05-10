@extends('master')

@section('title', "Hlavná stránka")

@section('content')

    <div id="notification" style="display: none;">
        <span id="messageContainer"></span>
        <span id="closeButton">&times;</span>
    </div>

    <div >
        <table>
            <thead>
            <tr >
                <th>Dátum a čas</th>
                <th>Jazero</th>
                <th>Popis</th>
                <th>Teplota (°C)</th>
            </tr>
            </thead>
            <tbody>
            @forelse($measurement as $measurement)
                <tr>
                    <td>{{ $measurement->created_at }}</td>
                    <td>{{ $measurement->lake }}</td>
                    <td>{{ $measurement->description }}</td>
                    <td>{{ $measurement->temperature }}</td>
                </tr>

            @empty

                <p> Nie sú žiadne záznamy! </p>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
