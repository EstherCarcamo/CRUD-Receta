@extends('layouts.plantillabase');

@section('contenido')
<a href="mascotas/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Raza</th>
            <th scope="col">Edad</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mascotas as $mascota)
        <tr>
            <td>{{$mascota->id}}</td>
            <td>{{$mascota->nombre}}</td>
            <td>{{$mascota->raza}}</td>
            <td>{{$mascota->edad}}</td>
            <td>
                <form action = "{{route ('mascotas.destroy',$mascota->id)}}" method="POST">
                <a href="/mascotas/{{$mascota->id}}/edit" class="btn btn-info">Editar</a>
                @csrf 
                @method('DELETE')
                <button class="btn btn-danger">Borrar</button>
                </form>
            </td>    
        </tr>
        @endforeach
    </tbody>
</table>
@endsection