@extends('layouts.plantillabase');

@section('contenido')
<h2>Crear Registro</h2>
<form action="/mascotas" method="POST">
    @csrf 
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
        <label for="" class="form-label">Raza</label>
        <input id="raza" name="raza" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input id="edad" name="edad" type="number" step="any" value="0" class="form-control" tabindex="3">
</div>
<a href="/mascotas" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>