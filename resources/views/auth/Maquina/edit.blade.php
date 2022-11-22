@extends('auth.tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Editar Maquina</h3>
    <div class="col-sm-12">
                <a href="{{ route('maquina.create') }}" class="btn btn-outline-secondary">Crear Maquina</a>
                <a href="{{ route('maquina.index') }}" class="btn btn-outline-secondary">Listar Maquinas</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>

            <form action="{{ route('maquina.update', $maquina) }}" method="POST">
    @method('put')
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-6">
                <label for="nombre_Maquina" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Maquina" class="form-control" id="nombre_Maquina" value="{{ old('nombre_Maquina', $maquina->nombre_Maquina) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="proveedor" class="form-label">Nombre Proveedor</label><br>
                <input type="text" name="proveedor" class="form-control" id="proveedor" value="{{ old('proveedor', $maquina->proveedor) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="cantidad" class="form-label">Cantidad</label><br>
                <input type="number" name="cantidad" class="form-control" id="cantidad" value="{{ old('cantidad', $maquina->cantidad) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="lugar_Maquina" class="form-label">Lugar Maquina</label><br>
                <input type="text" name="lugar_Maquina" class="form-control" id="lugar_Maquina" value="{{ old('lugar_Maquina', $maquina->lugar_Maquina) }}"><br>
            </div>

            <div class="col-sm-6">
                <label for="estado_Maquina" class="form-label">Estado</label><br>
                <select name="estado_Maquina" id="estado_Maquina" class="form-select">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <div class="col-sm-6">
            <label for="id_Mantenimiento_FK" class="form-label">Seleccione el mantenimiento que corresponde:</label><br>
            <select name="id_Mantenimiento_FK" id="id_Mantenimiento_FK" class="form-select" value="{{ old('id_Mantenimiento_FK', $maquina->id_Mantenimiento_FK) }}" disabled>
                    @foreach ($mantenimiento as $mantenimiento)
                <option value="{{ $mantenimiento->id }}">
                    {{ $mantenimiento->tipo_Mantenimiento}}
                    @endforeach
            </select>
            </div>

            <div class="col-sm-6">
            <label for="identificacion_Gerente_FK" class="form-label">Seleccione el gerente que corresponde:</label><br>
            <select name="identificacion_Gerente_FK" id="identificacion_Gerente_FK" class="form-select" value="{{ old('identificacion_Gerente_FK', $maquina->identificacion_Gerente_FK) }}" disabled>
                    @foreach ($gerente as $gerente)
                <option value="{{ $gerente->id }}">
                    {{ $gerente->nombre_Geren}}
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