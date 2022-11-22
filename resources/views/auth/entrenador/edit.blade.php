@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Editar Entrenador</h3>
    <div class="col-sm-12">
                <a href="{{ route('entrenador.create') }}" class="btn btn-outline-secondary">Crear Entrenador</a>
                <a href="{{ route('entrenador.index') }}" class="btn btn-outline-secondary">Listar Entrenador</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>

    <form action="{{ route('entrenador.update', $entrenador) }}" method="POST">
        @method('put')
        @csrf
        <br>
        <div class="row">
        <div class="col-sm-6">
                <label for="nombre_Entre" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Entre" class="form-control" id="nombre_Entre" value="{{ old('nombre_Entre', $entrenador->nombre_Entre) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="apellido_Entre" class="form-label">Apellido</label><br>
                <input type="text" name="apellido_Entre" class="form-control" id="apellido_Entre" value="{{ old('apellido_Entre', $entrenador->apellido_Entre) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="fecha_Nac_Entre" class="form-label">Fecha Nacimiento</label><br>
                <input type="date" name="fecha_Nac_Entre" class="form-control" id="fecha_Nac_Entre" value="{{ old('fecha_Nac_Entre', $entrenador->fecha_Nac_Entre) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="telefono_Entre" class="form-label">Telefono</label><br>
                <input type="text" name="telefono_Entre" class="form-control" id="telefono_Entre" value="{{ old('telefono_Entre', $entrenador->telefono_Entre) }}"><br><br>
            </div>
           
            <div class="col-sm-6">
                <label for="direccion_Entre" class="form-label">Direccion</label><br>
                <input type="text" name="direccion_Entre" class="form-control" id="direccion_Entre" value="{{ old('direccion_Entre', $entrenador->direccion_Entre) }}"><br><br>
            </div>

            <div class="col-sm-6">
            <label for="identificacion_Usuario_FK" class="form-label">Seleccione el usuario que corresponde:</label><br>
            <select name="identificacion_Usuario_FK" id="identificacion_Usuario_FK" class="form-select" value="{{ old('identificacion_Usuario_FK', $entrenador->identificacion_Usuario_FK) }}" disabled>
                    @foreach ($usuario as $usuario)
                <option value="{{ $usuario->id }}">
                    {{ $usuario->name}}
                    @endforeach
            </select>
            </div>

            <div class="col-sm-6">
                <label for="estado_Entre" class="form-label">Estado</label><br>
                <select name="estado_Entre" id="estado_Entre" class="form-select">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select><br>
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