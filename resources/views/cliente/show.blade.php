@extends('layouts.app')

@section('titulo', 'Detalle del Cliente')

@section('contenido')

<div class="text-center">
    <div class="card-body">
        <p class="card-text">{{ $clientes->nombre }}</p>
        <p class="card-text">{{ $clientes->telefono }}</p>
        <p class="card-text">{{ $clientes->correo}}</p>

    </div>
    <br>
    <a href="{{ route('clientes.edit', $clientes->id) }}" class="btn btn-warning">Editar Cliente</a>

    <!-- Botón para eliminar con modal de confirmación -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
        Eliminar Cliente
    </button>

    <!-- Modal de confirmación de eliminación -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Estás seguro de que deseas eliminar el cliente "{{$clientes->nombre }}"?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form action="{{ route('clientes.destroy', $clientes->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

