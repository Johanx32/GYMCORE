@extends('auth.tema.appCliente')

@section('title', "Listado de Maquinas")

@section('contenido')
<h3>Listado de Maquinas</h3><br>

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
                Proveedor
            </th>
            <th>
                Cantidad
            </th>
            <th>
                Lugar Maquina
            </th>
            <th>
            <th>
                Mantenimiento
            </th>
            <th>
                Gerente
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($maquina as $maquina)
        <tr>
            <td>
                {{ $maquina->id}}
            </td>
            <td>
                {{ $maquina->nombre_Maquina }}
            </td>
            <td>
                {{ $maquina->proveedor }}
            </td>
            <td>
                {{ $maquina->cantidad }}
            </td>
            <td>
                {{ $maquina->lugar_Maquina }}
            </td>
            <td>
                {{ $maquina->foto_Maquina }}
            </td>
            <td>
                {{ $maquina->mantenimiento->tipo_Mantenimiento }}
            </td>
            <td>
                {{ $maquina->gerente->nombre_Geren }}
            </td>
            @endforeach
    </tbody>
</table>
@endsection