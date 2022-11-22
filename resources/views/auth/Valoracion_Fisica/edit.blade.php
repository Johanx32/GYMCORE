@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nueva Valoracion Fisica</h3>
    <div class="col-sm-12">
                <a href="{{ route('valoracion_fisica.create') }}" class="btn btn-outline-secondary">Crear valoracion fisica</a>
                <a href="{{ route('valoracion_fisica.index') }}" class="btn btn-outline-secondary">Listar valoracion fisicas</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>
    <form action="{{ route('valoracion_fisica.update', $valoracion_fisica) }}" method="POST">
    @method('put')
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-6">
                <label for="peso" class="form-label">Peso</label><br>
                <input type="text" name="peso" class="form-control" id="peso" value="{{ old('peso', $valoracion_fisica->peso) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="DiagMantenimiento" class="form-label">Estatura</label><br>
                <input type="text" name="estatura" class="form-control" id="DiagMantenimiento" value="{{ old('estatura', $valoracion_fisica->estatura) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="descripmed" class="form-label">Descripcion Medidas</label><br>
                <input type="textarea" name="descripcion_Medidas" class="form-control" id="descripmed" value="{{ old('descripcion_Medidas', $valoracion_fisica->descripcion_Medidas) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="imc" class="form-label">IMC</label><br>
                <input type="text" name="imc" class="form-control" id="imc" value="{{ old('imc', $valoracion_fisica->imc) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="fecha_Valoracion" class="form-label">Fecha Valoracion</label><br>
                <input type="date" name="fecha_Valoracion" class="form-control" id="fecha_Valoracion" value="{{ old('fecha_Valoracion', $valoracion_fisica->fecha_Valoracion) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="estadoVal" class="form-label">Estado</label><br>
                <select name="estado_Valoracion" id="estadoVal" class="form-select" value="{{ old('estadoVal', $valoracion_fisica->estadoVal) }}">
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