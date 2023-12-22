@extends('layouts.app')
<div class="container">
    <form action="{{ url('/jugadores') }}" method="post">
    @csrf
    @include('jugadores.form', ['modo'=>'Crear'])

    </form>
</div>