@extends('auth.tema.appCliente')

@section('title', "Listado de Rutinas")

@section('contenido')

<div class="row">
    <h1 class="h1-show">{{ $rutina->objetivo }}</h1>
</div>
<div class="row">
    <div class="col s8">

        <ul class="collection">

            <li class="collection-item avatar">
                <i class="material-icons circle red">assignment</i>
                <span class="title">Descripcion</span>
                <p>{{ $rutina->objetivo }}<br>
                </p>
                <a href="#" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
        </ul>

    </div>
    @endsection