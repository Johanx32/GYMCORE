@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Editar Rutina</h3>
    <div class="col-sm-12">
                <a href="{{ route('rutina.create2') }}" class="btn btn-outline-secondary">Crear Rutina</a>
                <a href="{{ route('rutina.index3') }}" class="btn btn-outline-secondary">Listar Rutinas</a>
                <a href="{{ route('entrenador.indexentrenador') }}"class="btn btn-outline-secondary">Volver</a>
            </div>

            <form action="{{ route('rutina.update2', $rutina) }}" method="POST">
    @method('put')
        @csrf
<br>
        <div class="row">
            <div class="col-sm-6">
                <label for="nombre_Rutina" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Rutina" class="form-control" id="nombre_Rutina" value="{{ old('nombre_Rutina', $rutina->nombre_Rutina) }}"><br>
            </div>
            
            <div class="col-sm-6">
                <label for="objetivo" class="form-label">Objetivo</label><br>
                <input type="text" name="objetivo" class="form-control" id="objetivo" value="{{ old('objetivo', $rutina->objetivo) }}"><br>
            </div>

            <div class="col-sm-6">
            <label for="id_Ejercicio_FK" class="form-label">Seleccione el ejercicio que corresponde:</label><br>
            <select name="id_Ejercicio_FK" id="id_Ejercicio_FK" class="form-select" value="{{ old('id_Ejercicio_FK', $rutina->id_Ejercicio_FK) }}" disabled>
                    @foreach ($ejercicio as $ejercicio)
                <option value="{{ $ejercicio->id }}">
                    {{ $ejercicio->nombre_Ejercicio}}
                    @endforeach
            </select>
            </div>

            <div class="col-sm-6">
            <label for="identificacion_Entrenador_FK" class="form-label">Seleccione el entrenador que corresponde:</label><br>
            <select name="identificacion_Entrenador_FK" id="identificacion_Entrenador_FK" class="form-select" value="{{ old('identificacion_Entrenador_FK', $rutina->identificacion_Entrenador_FK) }}" disabled>
                    @foreach ($entrenador as $entrenador)
                <option value="{{ $entrenador->id }}">
                    {{ $entrenador->nombre_Entre}}
                    @endforeach
            </select><br>
            </div>

            <div class="col-sm-6">
            <label for="identificacion_Cliente_FK" class="form-label">Seleccione el cliente que corresponde:</label><br>
            <select name="identificacion_Cliente_FK" id="identificacion_Cliente_FK" class="form-select" value="{{ old('identificacion_Cliente_FK', $rutina->identificacion_Cliente_FK) }}" disabled>
                    @foreach ($cliente as $cliente)
                <option value="{{ $cliente->id }}">
                    {{ $cliente->nombre_Clie}}
                    @endforeach
            </select>


            <div class="col-sm-6">
                <label for="estado_Rutina" class="form-label">Estado</label><br>
                <select name="estado_Rutina" id="estado_Rutina" class="form-select" value="{{ old('estado_Rutina', $rutina->estado_Rutina) }}">
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