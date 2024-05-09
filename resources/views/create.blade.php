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
        <form method="POST" action="{{ route('Measurement.store') }}">
            @csrf
            <div class="form-group">
                <label for="lake">Jazero:</label>
                <input type="text" class="form-control" id="lake" name="lake">
            </div>
            <div class="form-group">
                <label for="description">Popis:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="temperature">Teplota (°C):</label>
                <input type="number" class="form-control" id="temperature" name="temperature">
            </div>
            <button type="submit" class="btn btn-primary">Vytvoriť záznam</button>
        </form>
    </div>

@endsection
