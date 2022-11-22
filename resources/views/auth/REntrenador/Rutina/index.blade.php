@extends('auth.tema.app')

@section('title', "Listado de Rutinas")

@section('contenido')
<h3>Listado de Rutinas</h3>
<div class="col-sm-12">
    <a href="{{ route('rutina.create2') }}" class="btn btn-outline-secondary">Crear Rutina</a>
    <a href="{{ route('rutina.index3') }}" class="btn btn-outline-secondary">Listar Rutinas</a>
    <a href="{{ route('entrenador.indexentrenador') }}" class="btn btn-outline-secondary">Volver</a>
</div>
<table class="table table-sm">
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Nombre
            </th>
            <th>
                Objetivo
            </th>
            <th>
                Ejercicio
            </th>
            <th>
                Entrenador
            </th>
            <th>
                Cliente
            </th>
            <th>
                Estado
            </th>
            <th colspan="3">
                Acciones
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($rutina as $rutina)
        <tr>
            <td>
                {{ $rutina->id }}
            </td>
            <td>
                {{ $rutina->nombre_Rutina }}
            </td>
            <td>
                {{ $rutina->objetivo }}
            </td>
            <td>
                {{ $rutina->ejercicio->nombre_Ejercicio }}
            </td>
            <td>
                {{ $rutina->entrenador->nombre_Entre }}
            </td>
            <td>
                {{ $rutina->cliente->nombre_Clie }}
            </td>
            <td>
                {{ $rutina->estado_Rutina() }}
            </td>
            <td>
                <form action="{{ route('rutina.destroy', $rutina) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
            </td>
            <td>
                <a href="{{ route('rutina.edit', $rutina) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection