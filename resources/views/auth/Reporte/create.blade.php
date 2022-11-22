@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nuevo Reporte</h3>
    <div class="col-sm-12">
                <a href="{{ route('reporte.create') }}" class="btn btn-outline-secondary">Crear Reporte</a>
                <a href="{{ route('reporte.index') }}" class="btn btn-outline-secondary">Listar Reportes</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>
    <form action="{{ route('reporte.store') }}" method="POST">
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-6">
                <label for="fecha_Reporte" class="form-label">Fecha Reporte</label><br>
                <?php
                $fm = date("2022-01-01");
                $fma = date ("2022-12-31");
                ?>
                <input type="date" name="fecha_Reporte" class="form-control" id="fecha_Reporte" min="<?= $fm;?>" max="<?= $fma;?>"><br>
            </div>

            <div class="col-sm-6">
                <label for="descripcion" class="form-label">Descripcion</label><br>
                <input type="text" name="descripcion" class="form-control" id="descripcion"><br>
            </div> 

            <div class="col-sm-6">
            <label for="id_Maquina_FK" class="form-label">Seleccione la maquina que corresponde:</label><br>
            <select name="id_Maquina_FK" id="id_Maquina_FK" class="form-select">
                    @foreach ($maquina as $maquina)
                <option value="{{ $maquina->id }}">
                    {{ $maquina->nombre_Maquina}}
                    @endforeach
            </select>
            </div>

            <div class="col-sm-6">
            <label for="identificacion_Usuario_FK" class="form-label">Seleccione el Usuario que corresponde:</label><br>
            <select name="identificacion_Usuario_FK" id="identificacion_Usuario_FK" class="form-select">
                    @foreach ($usuario as $usuario)
                <option value="{{ $usuario->id }}">
                    {{ $usuario->name}}
                    @endforeach
            </select>
            </div>


            <div class="col-sm-6">
                <label for="estado_Reporte" class="form-label">Estado</label><br>
                <select name="estado_Reporte" id="estado_Reporte" class="form-select">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-outline-success">
                    Guardar
                </button>
            </div>

        </div>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection