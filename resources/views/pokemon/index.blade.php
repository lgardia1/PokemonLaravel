@extends('base')

@section('title', 'Pokemon')

@section('descritpion', 'Pokemon list')


<table class="table table-striped table-hover" id="tablaProducto">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>weight</th>
            <th>height</th>
            <th>evolution</th>
            <th>type</th>
            @if (session('user'))
                <th>delete</th>
                <th>edit</th>
            @endif
            <th>view</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($pokemons as $pokemon)
            <td>{{$pokemon->id}}</td>
            <td>{{$pokemon->name}}</td>
            <td>{{$pokemon->weight}}</td>
            <td>{{$pokemon->height}}</td>
            <td>{{$pokemon->evolution}}</td>
            <td>{{$pokemon->type}}</td>
                @if (session('user'))
                    <td><a href="#" data-href="{{ url('pokemon/' . $furniture->id) }}" class = "borrar">delete</a>
                    </td>
                    <td><a href="{{ url('furniture/' . $furniture->id . '/edit') }}">edit</a></td>
                @endif
                <td><a href="pokemon/{{$pokemon->id}}">View</a></td>
            @endforeach
        </tr>
    </tbody>
</table>
<div class="row">
    @if(session('user'))
        <a href="{{url('pokemon/create')}}">add pokemon</a>
        <form action="{{ url('') }}" method="post">
            @csrf
            @method('delete')
        </form>
    @endif
</div>

<script src="{{ url('asset/js/delete.js') }}"></script>