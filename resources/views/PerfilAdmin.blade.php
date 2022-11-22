<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion - Gerente</title>
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="{{ asset('css/PerfilCliente.css') }}">
    <link rel="stylesheet" href="../CSS/font-awesome.css">
    <script src="../JS/jquery-3.2.1.js"></script>
    <script src="../JS/info-perfil.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body>
    <section class="perfil-usuario">
        <div class="contenedor-perfil">
            <div class="portada-perfil" class="portada-perfil">
                <div class="sombra"></div>
                <div class="avatar-perfil">
                    <img src="../imagenes/xd/pexels-stas-knop-3760323.jpg" alt="img">
                    <a href="#" class="cambiar-foto">
                        <i class="fas fa-camera"></i>
                        <span>foto</span>
                    </a>
                </div>
                <div class="datos-perfil">
                    <h4 class="titulo-usuario">Bienvenido</h4>
                    <p class="bio-usuario">Este es tu panel de informacion</p>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper">
        <div class="title">
            Datos personales
        </div>
        <div class="form">
            <div class="inputfield">
                <label>Nombre</label>
                <input type="text" value="{{ $usuario->name }}" class="input" readonly placeholder="Pedro">
            </div>
            <div class="inputfield">
                <label>Apellido</label>
                <input type="text" class="input" readonly placeholder="Martinez">
            </div>
            <div class="inputfield">
                <label>Fecha Nacimiento</label>
                <input type="text" class="input" readonly placeholder="01/12/2000">
            </div>
            <div class="inputfield">
                <label>Telefono</label>
                <input type="text" class="input" readonly placeholder="3127887641">
            </div>
            <div class="inputfield">
                <label>Direccion</label>
                <input type="text" class="input" readonly placeholder="Calle 132 A N 151 A 51">
            </div>
            <div class="inputfield">
                <label>Estado</label>
                <input type="text" class="input" readonly placeholder="Activo">
            </div>
            <div class="inputfield">
                <a href="#"><input type="submit" value="datos verificados" class="btn"></a>
            </div>
        </div>
    </div>
</body>

</html>