@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nueva Valoracion Fisica</h3>
    <div class="col-sm-12">
                <a href="{{ route('valoracion_fisica.create') }}" class="btn btn-outline-secondary">Crear valoracion fisica</a>
                <a href="{{ route('valoracion_fisica.index') }}" class="btn btn-outline-secondary">Listar valoracion fisicas</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>
    <form action="{{ route('valoracion_fisica.store') }}" method="POST">
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-6">
                <label for="tipoMantenimiento" class="form-label">Peso</label><br>
                <input type="text" name="peso" class="form-control" id="tipoMantenimiento"><br>
            </div>

            <div class="col-sm-6">
                <label for="DiagMantenimiento" class="form-label">Estatura</label><br>
                <input type="text" name="estatura" class="form-control" id="DiagMantenimiento"><br>
            </div>

            <div class="col-sm-6">
                <label for="descripmed" class="form-label">Descripcion Medidas</label><br>
                <input type="textarea" name="descripcion_Medidas" class="form-control" id="descripmed"><br>
            </div>

            <div class="col-sm-6">
                <label for="imc" class="form-label">IMC</label><br>
                <input type="text" name="imc" class="form-control" id="imc"><br>
            </div>

            <div class="col-sm-6">
                <label for="fechaVal" class="form-label">Fecha Valoracion</label><br>
                <input type="date" name="fecha_Valoracion" class="form-control" id="fechaVal"><br>
            </div>

            <div class="col-sm-6">
                <label for="estadoVal" class="form-label">Estado</label><br>
                <select name="estado_Valoracion" id="estadoVal" class="form-select">
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