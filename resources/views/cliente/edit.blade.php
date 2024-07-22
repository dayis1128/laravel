@extends('layouts.app')

@section('titulo','editar cliente')

@section('contenido')

    <br>
    <h3>Editar Cliente</h3>
    <form action="/clientes" method="post" enctype="multipart/form-data">
         @csrf
        <div class="mb-3">
          <label for="nombrecliente" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="text" class="form-control" id="correo" name="correo">
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
    </form>


@endsection



