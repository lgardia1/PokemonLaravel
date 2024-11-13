@extends('base')

@section('title', 'Pokemon')

@section('styles')
    <link rel="stylesheet" href="{{ url('asset/styles/create_edit.css') }}">
@endsection

@section('description', 'Pokemon list')

@section('content') <!-- Usa 'content' para el contenido principal -->
<form action="{{ url('pokemon/'. $pokemon->id)}}" method="post">
    @csrf 
    @method('put')

    <!-- Campo de nombre con valor anterior o de sesión -->
    <label for="name">Pokemon name</label>
    <input 
        type="text" 
        name="name" 
        id="name" 
        class="form-control" 
        value="{{ old('name', $pokemon->name) }}"
        placeholder="Pokemon name"
    >

    <!-- Campo de peso con valor anterior o de sesión -->
    <label for="weight">Pokemon weight</label>
    <input 
        type="number" 
        step="0.01" 
        placeholder="0.00" 
        name="weight" 
        id="weight" 
        class="form-control" 
        value="{{ old('weight', $pokemon->weight) }}"
    >

    <!-- Campo de altura con valor anterior o de sesión -->
    <label for="height">Pokemon height</label>
    <input 
        type="number" 
        step="0.01" 
        placeholder="0.00" 
        name="height" 
        id="height" 
        class="form-control" 
        value="{{ old('height', $pokemon->height) }}"
    >

    <label for="height">Pokemon evolution</label>
    <input 
        type="number" 
        step="1" 
        placeholder="0" 
        name="evolution" 
        id="evolution" 
        class="form-control" 
        value="{{ old('evolution', $pokemon->evolution) }}"
    >

    <!-- Campo de tipo con opción seleccionada de sesión -->
    <label for="type">Pokemon type</label>
    <select name="type" id="type" required>
        <option value="water" @selected(old('type', $pokemon->type) == 'water')>Water</option>
        <option value="ground" @selected(old('type', $pokemon->type) == 'ground')>Ground</option>
        <option value="rock" @selected(old('type', $pokemon->type) == 'rock')>Rock</option>
        <option value="fire" @selected(old('type', $pokemon->type) == 'fire')>Fire</option>
        <option value="grass" @selected(old('type', $pokemon->type) == 'grass')>Grass</option>
        <option value="electric" @selected(old('type', $pokemon->type) == 'electric')>Electric</option>
        <option value="psychic" @selected(old('type', $pokemon->type) == 'psychic')>Psychic</option>
        <option value="ice" @selected(old('type', $pokemon->type) == 'ice')>Ice</option>
        <option value="dragon" @selected(old('type', $pokemon->type) == 'dragon')>Dragon</option>
        <option value="dark" @selected(old('type', $pokemon->type) == 'dark')>Dark</option>
        <option value="fairy" @selected(old('type', $pokemon->type) == 'fairy')>Fairy</option>
    </select>

    <!-- Botón de envío -->
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection
