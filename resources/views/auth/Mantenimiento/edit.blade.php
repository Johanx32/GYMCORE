@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Editar Mantenimiento</h3>
    <div class="col-sm-12">
                <a href="{{ route('mantenimiento.create') }}" class="btn btn-outline-secondary">Crear mantenimiento</a>
                <a href="{{ route('mantenimiento.index') }}" class="btn btn-outline-secondary">Listar mantenimientos</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>
    <form action="{{ route('mantenimiento.update', $mantenimiento) }}" method="POST">
        @method('put')
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-6">
                <label for="tipoMantenimiento" class="form-label">Tipo de Mantenimiento</label><br>
                <input type="text" name="tipo_Mantenimiento" class="form-control" id="tipoMantenimiento" value="{{ old('tipo_Mantenimiento', $mantenimiento->tipo_Mantenimiento) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="DiagMantenimiento" class="form-label">Diagnostico del Mantenimiento</label><br>
                <input type="text" name="diagnostico_Manteni" class="form-control" id="DiagMantenimiento" value="{{ old('diagnostico_Manteni', $mantenimiento->diagnostico_Manteni) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="fechaInicio" class="form-label">Fecha Inicio</label><br>
                <input type="date" name="fecha_Inicio" class="form-control" id="fechaInicio" value="{{ old('fecha_Inicio', $mantenimiento->fecha_Inicio) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="fechaFin" class="form-label">Fecha Fin</label><br>
                <input type="date" name="fecha_Fin" class="form-control" id="fechaFin" value="{{ old('fecha_Fin', $mantenimiento->fecha_Fin) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="estadoMan" class="form-label">Estado</label><br>
                <select name="estado_Mantenimiento" id="estadoMan" class="form-select">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select><br>
            </div>

            <div class="col-sm-12 text-end my-2">
                <button type="submit"class="btn btn-outline-success">
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