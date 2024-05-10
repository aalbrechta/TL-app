@extends('master')

@section('title', "Pridanie záznamu")

@section('content')

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

    <div>
        <div class="flex">
        <form  method="POST" action="{{ route('Measurement.store') }}" class="form-container">
            @csrf
            <div class="form-title">
                <h5>Pridajte nový záznam merania teploty jazera</h5>
            </div>
            <div class="form-group">
                <label class="header" for="lake">Jazero:</label>
                <input type="text" class="form-control" id="lake" name="lake">
            </div>
            <div class="form-group">
                <label class="section" for="description">Popis:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="temperature">Teplota (°C):</label>
                <input type="number" class="form-control" id="temperature" name="temperature">
            </div>
            <button class="btn-primary" type="submit" onclick="confirmCreate()">Vytvoriť záznam</button>
        </form>
        </div>
    </div>

@endsection
