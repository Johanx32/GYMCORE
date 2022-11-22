@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Nuevo Cliente</h3>
    <div class="col-sm-12">
    <a href="{{ route('cliente.create') }}" class="btn btn-outline-secondary">Crear Cliente</a>
                <a href="{{ route('cliente.index') }}" class="btn btn-outline-secondary">Listar Clientes</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>

            <form action="{{ route('cliente.update', $cliente) }}" method="POST">
    @method('put')
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-6">
                <label for="nombre_Clie" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Clie" class="form-control" id="nombre_Clie" value="{{ old('nombre_Clie', $cliente->nombre_Clie) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="apellido_Clie" class="form-label">Apellido</label><br>
                <input type="text" name="apellido_Clie" class="form-control" id="apellido_Clie" value="{{ old('apellido_Clie', $cliente->apellido_Clie) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="fecha_Nac_Clie" class="form-label">Fecha Nacimiento:</label><br>
                <input type="date" name="fecha_Nac_Clie" class="form-control" id="fecha_Nac_Clie" value="{{ old('fecha_Nac_Clie', $cliente->fecha_Nac_Clie) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="telefono_Clie" class="form-label">Telefono:</label><br>
                <input type="text" name="telefono_Clie" class="form-control" id="telefono_Clie" value="{{ old('telefono_Clie', $cliente->telefono_Clie) }}"><br><br>
            </div>
           
            <div class="col-sm-6">
                <label for="direccion_Clie" class="form-label">Direccion:</label><br>
                <input type="text" name="direccion_Clie" class="form-control" id="direccion_Clie" value="{{ old('direccion_Clie', $cliente->direccion_Clie) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="estado_Clie" class="form-label">Estado</label><br>
                <select name="estado_Clie" id="estado_Clie" class="form-select" value="{{ old('estado_Clie', $cliente->estado_Clie) }}">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <div class="col-sm-6">
            <label for="id_valoracionFisica_FK" class="form-label">Seleccione la valoracion fisica que corresponde:</label><br>
            <select name="id_valoracionFisica_FK" id="id_valoracionFisica_FK" class="form-select" value="{{ old('id_valoracionFisica_FK', $cliente->id_valoracionFisica_FK) }}" disabled>
                    @foreach ($valofisica as $valofisica)
                <option value="{{ $valofisica->id }}">
                    {{ $valofisica->id}}
                    @endforeach
            </select>
            </div>

            <div class="col-sm-6">
            <label for="identificacion_Usuario_FK" class="form-label">Seleccione el usuario que corresponde:</label><br>
            <select name="identificacion_Usuario_FK" id="identificacion_Usuario_FK" class="form-select" value="{{ old('identificacion_Usuario_FK', $cliente->identificacion_Usuario_FK) }}" disabled>
                    @foreach ($usuario as $usuario)
                <option value="{{ $usuario->id }}">
                    {{ $usuario->name}}
                    @endforeach
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