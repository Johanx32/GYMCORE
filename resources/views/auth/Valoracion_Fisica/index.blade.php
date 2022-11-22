@extends('auth.tema.app')

@section('title', "Listado de Cliente")
@section('contenido')
<h3>Listado de Valoraciones</h3>
<div class="col-sm-12">
    <a href="{{ route('valoracion_fisica.create') }}" class="btn btn-outline-secondary">Crear valoracion fisica</a>
    <a href="{{ route('valoracion_fisica.index') }}" class="btn btn-outline-secondary">Listar valoracion fisicas</a>
    <a href="{{ route('gerente.indexadmin') }}" class="btn btn-outline-secondary">Volver</a>
</div>

<table class="table table-striped table-bordered" style="width:100%" id="example">
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Peso
            </th>
            <th>
                Estatura
            </th>
            <th>
                Descripcion Medidas
            </th>
            <th>
                IMC
            </th>
            <th>
                Fecha Valoracion
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
        @foreach ($valoracion_fisica as $valoracion_fisica)
        <tr>
            <td>
                {{ $valoracion_fisica->id }}
            </td>
            <td>
                {{ $valoracion_fisica->peso }}
            </td>
            <td>
                {{ $valoracion_fisica->estatura }}
            </td>
            <td>
                {{ $valoracion_fisica->descripcion_Medidas }}
            </td>
            <td>
                {{ $valoracion_fisica->imc }}
            </td>
            <td>
                {{ $valoracion_fisica->fecha_Valoracion }}
            </td>
            <td>
                {{ $valoracion_fisica->estado_Valoracion() }}
            </td>
            <td>
                <form action="{{ route('valoracion_fisica.destroy', $valoracion_fisica) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                </form>
            </td>
            <td>
                <a href="{{ route('valoracion_fisica.edit', $valoracion_fisica) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
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