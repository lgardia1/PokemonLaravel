@extends('base')

@section('styles')
    <link rel="stylesheet" href="{{ url('asset/styles/show.css') }}">
@endsection

@section('title', 'Pokemon')

@section('descritpion', 'Pokemon list')

@section('content')

    <div class="pokemon-detail">
        <strong>Id:</strong>
        <span>{{ $pokemon->id }}</span>
    </div>

    <div class="pokemon-detail">
        <strong>Name:</strong>
        <span>{{ $pokemon->name }}</span>
    </div>

    <div class="pokemon-detail">
        <strong>Weight:</strong>
        <span>{{ $pokemon->weight }}</span>
    </div>
    
    <div class="pokemon-detail">
        <strong>Height:</strong>
        <span>{{ $pokemon->height }}</span>
    </div>

    <div class="pokemon-detail">
        <strong>Evolution:</strong>
        <span>{{ $pokemon->evolution }}</span>
    </div>

    <div class="pokemon-detail">
        <strong>Type:</strong>
        <span>{{ $pokemon->type }}</span>
    </div>

@endsection