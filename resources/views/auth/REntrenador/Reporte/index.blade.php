@extends('auth.tema.app')

@section('title', "Listado de Reportes")

@section('contenido')
<h3>Listado de Reportes</h3>
<div class="col-sm-12">
    <a href="{{ route('reporte.create2') }}" class="btn btn-outline-secondary">Crear Reporte</a>
    <a href="{{ route('reporte.index2') }}" class="btn btn-outline-secondary">Listar Reportes</a>
    <a href="{{ route('entrenador.indexentrenador') }}" class="btn btn-outline-secondary">Volver</a>
</div>
<br>
<table class="table table-sm">
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Fecha
            </th>
            <th>
                Descripcion
            </th>
            <th>
                Id Maquina
            </th>
            <th>
                Identificacion Usuario
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($reporte as $reporte)
        <tr>
            <td>
                {{ $reporte->id}}
            </td>
            <td>
                {{ $reporte->fecha_Reporte }}
            </td>
            <td>
                {{ $reporte->descripcion }}
            </td>
            <td>
                {{ $reporte->maquina->nombre_Maquina }}
            </td>
            <td>
                {{ $reporte->identificacion_Usuario_FK }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection