@extends('master')

@section('title', "Hlavná stránka")

@section('content')

    @forelse($measurement as $measurement)

        <h1>{{ $measurement->lake }}</h1>
        {!! $measurement->temperature !!}

        @empty

            <p> Je to prazdne </p>
    @endforelse


@endsection
