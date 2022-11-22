<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Reportes</title>
    <style>
        table {
            font-size: 12px;
        }
        h5{
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <h5 class="font-weight-bold">Listado de Reportes</h5>
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Fecha
                        </th>
                        <th>
                            Descripcion
                        </th>
                        <th>
                            Maquina
                        </th>
                        <th>
                            Usuario
                        </th>
                        <th>
                            Estado
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($reporte as $reporte)
                    <tr>
                        <td>
                            {{ $reporte->id}}
                        </td>
                        <td>
                            {{ $reporte->fecha_Reporte }}
                        </td>
                        <td>
                            {{ $reporte->descripcion }}
                        </td>
                        <td>
                            {{ $reporte->maquina->nombre_Maquina }}
                        </td>
                        <td>
                            {{ $reporte->usuario->name }}
                        </td>
                        <td>
                            {{ $reporte->estado_Reporte() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</body>
</html>