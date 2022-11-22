@extends('auth.tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nuevo Gerente</h3>
    <div class="col-sm-12">
                <a href="{{ route('gerente.create') }}" class="btn btn-outline-secondary">Crear Gerente</a>
                <a href="{{ route('gerente.index') }}" class="btn btn-outline-secondary">Listar Gerente</a>
                <a href="{{ route('gerente.indexadmin') }}"class="btn btn-outline-secondary">Volver</a>
            </div>
    <form action="{{ route('gerente.store') }}" method="POST">
        @csrf
        <br>
        <div class="row"> 
            <div class="col-sm-6">
                <label for="nombre_Geren" class="form-label">Nombre</label><br>
                <input type="text" name="nombre_Geren" class="form-control" id="nombre_Geren"><br><br>
            </div>
            
            <div class="col-sm-6">
                <label for="apellido_Geren" class="form-label">Apellido</label><br>
                <input type="text" name="apellido_Geren" class="form-control" id="apellido_Geren"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="fecha_Nac_Geren" class="form-label">Fecha Nacimiento:</label><br>
                <?php
                $fm = date("1900-01-01");
                $fma = date ("2008-12-31");
                ?>
                <input type="date" name="fecha_Nac_Geren" class="form-control" id="fecha_Nac_Geren" min="<?= $fm;?>" max="<?= $fma;?>"><br><br>
            </div>

            <div class="col-sm-6">
                <label for="telefono_Geren" class="form-label">Telefono:</label><br>
                <input type="number" name="telefono_Geren" class="form-control" id="telefono_Geren"><br><br>
            </div>
           
            <div class="col-sm-6">
                <label for="direccion_Geren" class="form-label">Direccion:</label><br>
                <input type="text" name="direccion_Geren" class="form-control" id="direccion_Geren"><br><br>
            </div>

            <div class="col-sm-6">
            <label for="identificacion_Usuario_FK" class="form-label">Seleccione el usuario que corresponde:</label><br>
            <select name="identificacion_Usuario_FK" id="identificacion_Usuario_FK" class="form-select">
            @foreach ($usuario as $usuario)
                        @if($usuario->id_Role_FK === 1)
                        <option value="{{ $usuario->id }}">
                            {{ $usuario->name}}
                        </option>   
                        @endif
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