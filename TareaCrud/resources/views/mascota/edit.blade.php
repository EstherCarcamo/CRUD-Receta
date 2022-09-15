@extends('layouts.plantillabase');

@section('contenido')
<h2>Editar Registro</h2>

<form action="/mascotas/{{$mascota->id}}" method="POST">
    @csrf 
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$mascota->nombre}}">
</div>
<div class="mb-3">
        <label for="" class="form-label">Raza</label>
        <input id="raza" name="raza" type="text" class="form-control" value="{{$mascota->raza}}">
</div>
<div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input id="edad" name="edad" type="number" step="any" value="0" class="form-control" value="{{$mascota->edad}}">
</div>
<a href="/mascotas" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>