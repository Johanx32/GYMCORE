@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Editar Gerente</h3>
    <div class="col-sm-12">
                <a href="{{ route('gerente.create') }}" class="btn btn-outline-secondary">Crear Gerente</a>
                <a href="{{ route('gerente.index') }}" class="btn btn-outline-secondary">Listar Gerentes</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>

            <form action="{{ route('gerente.update', $gerente) }}" method="POST">
    @method('put')
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-6">
                <label for="nombre_Geren" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Geren" class="form-control" id="nombre_Geren" value="{{ old('nombre_Geren', $gerente->nombre_Geren) }}"><br><br>
            </div>
            
            <div class="col-sm-6">
                <label for="apellido_Geren" class="form-label">Apellido</label><br>
                <input type="text" name="apellido_Geren" class="form-control" id="apellido_Geren" value="{{ old('apellido_Geren', $gerente->apellido_Geren) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="fecha_Nac_Geren" class="form-label">Fecha Nacimiento</label><br>
                <input type="date" name="fecha_Nac_Geren" class="form-control" id="fecha_Nac_Geren" value="{{ old('fecha_Nac_Geren', $gerente->fecha_Nac_Geren) }}"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="telefono_Geren" class="form-label">Telefono</label><br>
                <input type="number" name="telefono_Geren" class="form-control" id="telefono_Geren" value="{{ old('telefono_Geren', $gerente->telefono_Geren) }}"><br><br>
            </div>
           
            <div class="col-sm-6">
                <label for="direccion_Geren" class="form-label">Direccion</label><br>
                <input type="text" name="direccion_Geren" class="form-control" id="direccion_Geren" value="{{ old('direccion_Geren', $gerente->direccion_Geren) }}"><br><br>
            </div>

            <div class="col-sm-6">
            <label for="identificacion_Usuario_FK" class="form-label">Seleccione el usuario que corresponde:</label><br>
            <select name="identificacion_Usuario_FK" id="identificacion_Usuario_FK" class="form-select" value="{{ old('identificacion_Usuario_FK', $gerente->identificacion_Usuario_FK) }}" disabled>
                    @foreach ($usuario as $usuario)
                <option value="{{ $usuario->id }}">
                    {{ $usuario->id}}
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