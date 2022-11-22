<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <title>Formulario de contacto</title>
    <script src="../JS/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="{{ asset('css/Contacto.css') }}" />
</head>

<body id="menu">
    <!--   header encabezado-->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.157961002598!2d-74.12434!3d4.7425958999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f837dfea24d79%3A0xe0d61b0187f058!2sCl.%20132d%20%2315374%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1667962409065!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> worldfitness.js21@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +57 3002410761</p>
            </section>
        </section>

        <form action="" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Asunto</label>
                <input type="text" id="names">

                <label for="phone">Nombres</label>
                <input type="text" id="phone">

                <label for="mensaje">Mensaje </label>
                <textarea id="mensaje"></textarea>

                <input type="button" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function iniciar() {
            Swal.fire({
                title: "Hola!!",
                html: '<p class="p-btn">¿como deseas iniciar sesion?</p><br><a href="loginalumno.php" class="btn-ini btn-iniciarse1">alumno</a><a href="loginmaestro.php" class="btn-ini btn-iniciarse2">Maestro</a>',
                allowOutsideClick: true,
                showConfirmButton: false,
                padding: "2rem",
                position: "top"
            });
        }
    </script>
</body>

</html>