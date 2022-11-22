@extends('auth.tema.appCliente')

@section('title', "Listado de Reportes")

@section('contenido')
<h3>Listado de Reportes</h3><br>
<div class="col-sm-12">
    <a href="{{ route('reporte.create2') }}" class="btn btn-outline-secondary">Crear Reporte</a>
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
                Maquina
            </th>
            <th>
                Usuario
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
                {{ $reporte->usuario->name }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection