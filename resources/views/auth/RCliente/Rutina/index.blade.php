@extends('auth.tema.appCliente')

@section('title', "Listado de Rutinas")

@section('contenido')
<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .flexone {
            flex: 1;
        }

        .article-contener {
            margin-left: -9%;
        }

        .groups {
            margin: 0 auto;
            width: 900px;
            padding: 10px;
            height: auto;
        }

        .groups li {
            position: relative;
            list-style: none;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 3px 4px 0 #0001;
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.3s;
        }

        .groups li:hover {
            transform: scale(1.04);
            box-shadow: 0 4px 14px 0 #0005;
        }

        .groups .card {
            overflow: hidden;
            display: block;
        }

        .groups .image-session {
            float: left;
            overflow: hidden;
            margin-right: 20px;
        }

        .groups .image-session .image {
            width: 280px;
            height: 220px;
            display: block;
            background-size: cover;
            background-position: center;
        }

        .groups .meta-sission {
            position: relative;
            padding: 15px;
            display: block;
            height: 220px;
        }

        .groups .meta-sission .head {
            display: flex;
            margin-bottom: 10px;
        }

        .groups .meta-sission .head .catogry {
            list-style: none;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            color: #0075ff;
        }

        .meta-sission .head .per span,
        .meta-sission .head .per input {
            display: block;
            font-size: 10px;
            text-align: right;
        }

        .meta-sission .head .per input {
            -webkit-appearance: none;
            height: 5px;
            border-radius: 5px;
            background: #0001;
            margin-bottom: 4px;
            overflow: hidden;
        }

        .meta-sission .head .per input::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 0;
            box-shadow: -100px 0 0 100px #0075ff;
        }

        .groups .body .title {
            height: 60px;
            overflow: hidden;
            font-size: 24px;
        }

        .groups .body .desc {
            height: 45px;
            overflow: hidden;
            margin-bottom: -15px;
            font-size: 13px;
        }

        .groups .footer .button {
            position: absolute;
            bottom: 20px;
            right: 25px;
            background: #0075ff;
            color: #fff;
            line-height: 2.2;
            padding: 0 20px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 1px 6px 0 #0004;
            transition: all 0.3s;
        }

        .groups .footer .button:hover {
            box-shadow: 0 3px 8px 0 #0005;
            background: #063a78;
            right: 15px;
        }

        .groups .footer .views {
            display: block;
            font-size: 12px;
            margin-top: 40px;
        }

        @media screen and (max-width:780px) {
            .groups {
                width: 96%;
            }

            .groups li:hover {
                transform: none;
                box-shadow: none;
            }
        }

        @media screen and (max-width:560px) {
            .groups .image-session {
                float: none;
                margin-right: 0;
            }

            .groups .image-session .image {
                width: 100%;
            }
        }
    </style>
</header>
<h3>Listado de Rutinas</h3>
@foreach ($rutina as $rutina)

@if($rutina->identificacion_Cliente_FK  === 1)

<div class="article-contener">
    <ul class="groups">
        <li>
            <div class="card">
                <div class="image-session">
                    <img class="image" src="{{asset('img/img_1.jpg')}}">
                </div> 
                <div class="meta-sission">
                    <div class="head">
                        <a href="#" class="catogry">{{ $rutina->nombre_Rutina }}</a>
                        <span class="flexone"></span>
                        <span class="per">
                            <input type="range" name="" value="50" min="0" max="100">
                        </span>
                    </div>
                    <div class="body">
                        <h2 class="title">Objetivo: <span>{{ $rutina->objetivo }}</span></h2>
                        <p class="desc">Nombre Ejercicio: <span>{{ $rutina->ejercicio->nombre_Ejercicio}}</span></p>
                        <p class="desc">Tiempo: <span>{{ $rutina->ejercicio->tiempo_Ejercicio }}</span></p>
                        <p class="desc">Musculos involucrados: <span>{{ $rutina->ejercicio->musculos_Involucrados }}</span></p>
                    </div>
                    <div class="footer">
                        <a href="#" class="button">{{ $rutina->ejercicio->series_Ejercicio }} Series</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

@endif

@endforeach
@endsection