@extends('master')

@section('title', "Admin")

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
                    <td>
                        <form  action="{{ route('measurement.destroy', $measurement->id) }}" method="POST" class="del-btn">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="confirmDelete()">Odstrániť</button>
                        </form>
                    </td>
                    <td>
                        <a class="link-edit" href="{{ route('measurement.edit', $measurement->id) }}">
                            Editovať
                        </a>

                    </td>
                </tr>

            @empty

                <p> Nie sú žiadne záznamy! </p>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
