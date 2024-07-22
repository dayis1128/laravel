@extends('layouts.app')


@section('titulo', 'Listado de Clientes')

@section('contenido')
<br>
<h3 class="text-center">Listado de Clientes</h3>
<br>
<div class="row"> {{--ya tenemos la fila--}}
    @foreach ($clientes as $cliente)
    <div class="col-sm"> {{--abrimos columna--}}
        <div class="card" style="width: 18rem;">

            <div class="card-body">
              <h5 class="card-title">{{$cliente->nombre}}</h5>
              <p class="card-text">{{$cliente->telefono}}</p>
              <p class="card-text">{{$cliente->correo}}</p>
              <br>
              <a href="/clientes/{{$cliente->id}}" class="btn btn-success">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div> {{--cierro el div row--}}

@endsection
