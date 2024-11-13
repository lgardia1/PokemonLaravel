@extends('base')

@section('styles')
    <link rel="stylesheet" href="{{ url('asset/styles/index.css') }}">
@endsection

@section('title', 'home')

@section('descritpion', 'pokemons, etc.')

@section('content')
<div class="row">
    @if(session('user')) 
        <a href="{{url('logout')}}">log out</a>
    @else
        <a href="{{url('login')}}">log in</a>
    @endif
    &nbsp;
    <a href="{{url('pokemon/')}}" class="btn btn-success">pokemons</a>

</div>
@endsection