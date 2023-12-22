@extends('layouts.app')
<div class="container">
    <form action="{{ url('/jugadores/'.$jugador->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('jugadores.form', ['modo'=>'Editar'])
    </form>
</div>