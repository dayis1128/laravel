@extends('layouts.app')

@section('titulo','crear cliente')

@section('contenido')
    <br>
    <h3>Crear Cliente</h3>
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
            <button type="submit" class="btn btn-success">Guardar</button>
    </form>


@endsection


