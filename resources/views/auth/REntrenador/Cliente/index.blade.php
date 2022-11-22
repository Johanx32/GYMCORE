@extends('auth.tema.app')

@section('title', "Listado de Cliente")

@section('contenido')
<h3>Listado de Clientes</h3>

<div class="col-sm-12">
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
                Nombre
            </th>
            <th>
                Apellido
            </th>
            <th>
                Fecha Nacimiento
            </th>
            <th>
                Telefono
            </th>
            <th>
                Direccion
            </th>
            <th>
                Usuario
            </th>
            <th>
                Id Valoracion Fisica
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cliente as $cliente)
        <tr>
            <td>
                {{ $cliente->id }}
            </td>
            <td>
                {{ $cliente->nombre_Clie }}
            </td>
            <td>
                {{ $cliente->apellido_Clie }}
            </td>
            <td>
                {{ $cliente->fecha_Nac_Clie }}
            </td>
            <td>
                {{ $cliente->telefono_Clie }}
            </td>
            <td>
                {{ $cliente->direccion_Clie }}
            </td>
            <td>
                {{ $cliente->usuario->name }}
            </td>
            <td>
                {{ $cliente->id_valoracionFisica_FK }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection