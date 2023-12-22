<h1>{{$modo}} Jugador</h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif    
<div class="form-group">
    <label for="Apodo">Apodo</label>
    <input type="text" class="form-control" name="Apodo" value="{{ isset($jugador->Apodo)?$jugador->Apodo:'' }}">
    <br>
</div>
<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text"  class="form-control" name="Nombre" value="{{ isset($jugador->Nombre)?$jugador->Nombre:'' }}">
    <br>
</div>
<div class="form-group">
    <label for="CantidadDinero">Cantidad de Dinero</label>
    <input type="integer" class="form-control" name="CantidadDinero" value="{{ isset($jugador->CantidadDinero)?$jugador->CantidadDinero:'' }}">
    <br>
</div>
<input class="btn btn-success" type="submit" value="{{$modo}}">
<a href="{{ url('jugadores') }}" class="btn btn-primary">Regresar</a>
