@extends('base')

@section('styles')
    <link rel="stylesheet" href="{{ url('asset/styles/indexPokemons.css') }}">
@endsection

@section('title', 'Pokemon')

@section('description', 'Pokemon list')

@section('content')
<table class="table table-striped table-hover" id="tablaProducto">
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>weight</td>
            <td>height</td>
            <td>evolution</td>
            <td>type</td>
            @if (session('user'))
                <th>delete</th>
                <th>edit</th>
            @endif
            <th>view</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pokemons as $pokemon)
            <tr>
                <td>{{ $pokemon->id }}</td>
                <td>{{ $pokemon->name }}</td>
                <td>{{ $pokemon->weight }}</td>
                <td>{{ $pokemon->height }}</td>
                <td>{{ $pokemon->evolution }}</td>
                <td>{{ $pokemon->type }}</td>
                @if (session('user'))
                    <td>
                        <a href="#" data-href="{{ url('pokemon/' . $pokemon->id) }}"  class="borrar">delete</a>
                    </td>
                    <td>
                        <a href="{{ url('pokemon/' . $pokemon->id . '/edit') }}">edit</a>
                    </td>
                @endif
                <td>
                    <a href="{{ url('pokemon/' . $pokemon->id) }}">View</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@if (session('user'))
    <div class="row">
        <a href="{{ url('pokemon/create') }}">add pokemon</a>
    </div>
    <form action="{{ url('') }}" method="post" id="formDelete">
        @csrf
        @method('delete')
    </form>
@endif

<script src="{{ url('asset/js/delete.js') }}"></script>
@endsection
