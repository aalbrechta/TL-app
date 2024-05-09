@extends('base')

@section('title', $measurement->lake)
@section('description', $measurement->description)

@section('content')
    <h1>{{ $measurement->lake }}</h1>
    {!! $measurement->temperature !!}
@endsection
