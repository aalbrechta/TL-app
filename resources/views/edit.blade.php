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
            @forelse($measurements as $measurements)
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
        <h5>Editace záznamu: {{ $measurement->lake }}</h5>

        <form action="{{ route('measurement.update', ['measurement' => $measurement]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="lake">Jazero</label>
                <input type="text" name="lake" id="lake" class="form-control" value="{{ old('lake') ?: $measurement->lake }}" required minlength="3" maxlength="80" />
            </div>

            <div class="form-group">
                <label for="description">Popis</label>
                <textarea name="description" id="description" rows="4" class="form-control" required minlength="25" maxlength="255">{{ old('description') ?: $measurement->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="temperature">Teplota (°C)</label>
                <input type="number" name="temperature" id="temperature" class="form-control" value="{{ old('temperature') ?: $measurement->temperature }}" required min="-9999.99" max="9999.99" step="0.01" />
            </div>

            <button type="submit" class="btn btn-primary">Uložit záznam</button>
        </form>

    </div>

@endsection
