@extends('layouts.app')
<div class="container">
    @if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
    @endif
    <a href="{{ url('jugadores/create') }}" class="btn btn-success">Crear Jugador</a>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Apodo</th>
                <th>Nombre</th>
                <th>Cantidad Dinero</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jugadores as $jugador)
            <tr>
                <td>{{ $jugador->id }}</td>
                <td>{{ $jugador->Apodo }}</td>
                <td>{{ $jugador->Nombre }}</td>
                <td>{{ $jugador->CantidadDinero }}</td>
                <td>
                <a href="{{ url('/jugadores/'.$jugador->id.'/edit') }}" class="btn btn-warning">
                    Editar
                </a>    
                | 
                    <form action="{{ url('/jugadores/'.$jugador->id ) }}" class="d-inline" method="post">
                    @csrf
                    {{  method_field('DELETE') }}
                    <input type="submit" onclick="return comfirm('¿Quieres borrar este jugador?')"
                    value="Borrar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>