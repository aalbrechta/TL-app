@extends('master')

@section('title', "Editovanie záznamu")

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
                    <td>{{ $measurements->created_at }}</td>
                    <td>{{ $measurements->lake }}</td>
                    <td>{{ $measurements->description }}</td>
                    <td>{{ $measurements->temperature }}</td>
                </tr>

            @empty

                <p> Nie sú žiadne záznamy! </p>
            @endforelse
            </tbody>
        </table>
    </div>

    <div>
        <form action="{{ route('measurement.update', ['measurement' => $measurement]) }}" method="POST"  class="form-container">
            @csrf
            @method('PUT')
            <div class="form-title">
                <h5>Editace záznamu: {{ $measurement->lake }}</h5>
            </div>

    <div class="form-group">
                <label class="header" for="lake">Jazero</label>
                <input type="text" name="lake" id="lake" class="form-control" value="{{ old('lake') ?: $measurement->lake }}" required minlength="3" maxlength="80" />
            </div>

            <div class="form-group">
                <label class="header" for="description">Popis</label>
                <textarea name="description" id="description" rows="4" class="form-control" required minlength="25" maxlength="255">{{ old('description') ?: $measurement->description }}</textarea>
            </div>

            <div class="form-group">
                <label class="header" for="temperature">Teplota (°C)</label>
                <input type="number" name="temperature" id="temperature" class="form-control" value="{{ old('temperature') ?: $measurement->temperature }}" required min="-9999.99" max="9999.99" step="0.01" />
            </div>

            <button type="submit" class="btn-primary" onclick="confirmUpdate()"> Uložit záznam </button>
        </form>

    </div>

@endsection
