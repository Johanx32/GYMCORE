@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nuevo Usuario</h3>
    <div class="col-sm-12">
                <a href="{{ route('usuario.create') }}" class="btn btn-outline-secondary">Crear Usuario</a>
                <a href="{{ route('usuario.index') }}" class="btn btn-outline-secondary">Listar Usuarios</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>
    <form action="{{ route('usuario.store') }}" method="POST">
        @csrf
        <br>
        <div class="row">
            <div class="col-sm-6">
                <label for="name" class="form-label">Nombre</label><br>
                <input type="text" name="name" class="form-control" id="name"><br>
            </div>

            <div class="col-sm-6">
                <label for="email" class="form-label">Email</label><br>
                <input type="text" name="email" class="form-control" id="email"><br>
            </div>

            <div class="col-sm-6">
            <label for="id_Role_FK" class="form-label">Seleccione el rol que corresponde:</label><br>
            <select name="id_Role_FK" id="id_Role_FK" class="form-select">
                    @foreach ($role as $role)
                <option value="{{ $role->id }}">
                    {{ $role->role}}
                    @endforeach
            </select>
            </div>

            <div class="col-sm-6">
                <label for="Contra" class="form-label">Contraseña</label><br>
                <input type="text" name="password" class="form-control" id="Contra">
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