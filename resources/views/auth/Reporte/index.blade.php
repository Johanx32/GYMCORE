@extends('auth.tema.app')

@section('title', "Listado de Cliente")
@section('contenido')
<h3>Listado de Reportes</h3>
<div class="col-sm-12">
    <a href="{{ route('reporte.create') }}" class="btn btn-outline-secondary">Crear Reporte</a>
    <a href="{{ route('reporte.download') }}" class="btn btn-outline-secondary">Exportar reportes a PDF</a>
    <a href="{{ route('gerente.indexadmin') }}" class="btn btn-outline-secondary">Volver</a>
</div>

<table class="table table-striped table-bordered" style="width:100%" id="example">
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
            <th>
                Estado
            </th>
            <th>
                Acciones
            </th>
            <th>
                Acciones
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
            <td>
                {{ $reporte->estado_Reporte() }}
            </td>
            <td>
                <form action="{{ route('reporte.destroy', $reporte) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
            </td>
            <td>
                <a href="{{ route('reporte.edit', $reporte) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontró nada, lo siento",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)"
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection