<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/indexAdmin.css')}}">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class="fa-solid fa-dumbbell"></i>
      <span class="logo_name">WorldFitnessJS</span>
    </div>
    <ul class="nav-links">


      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-users"></i>
            <span class="link_name">Usuarios</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Usuarios</a></li>
          <li><a href="{{ route('usuario.index') }}">Usuarios</a></li>
          <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
          <li><a href="{{ route('entrenador.index') }}">Entrenadores</a></li>
          <li><a href="{{ route('gerente.index') }}">Gerente</a></li>
        </ul>

      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-running"></i>
            <span class="link_name">Entrenamiento</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Entrenamiento</a></li>
          <li><a href="{{ route('rutina.index') }}">Rutinas</a></li>
          <li><a href="{{ route('valoracion_fisica.index')}}">Valoracion Fisica</a></li>
          <li><a href="{{ route('ejercicio.index') }}">Ejercicios</a></li>
        </ul>

      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <span class="link_name">Maquinaria</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Maquinaria</a></li>
          <li><a href="{{ route('maquina.index') }}">Maquinas</a></li>
          <li><a href="{{ route('mantenimiento.index') }}">Mantenimiento</a></li>
          <li><a href="{{ route('reporte.index') }}">Reportes</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class="fa-solid fa-circle-user"></i>
          <span class="link_name">Perfil</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Perfil</a></li>
        </ul>
      </li>

      <li>
        <div class="profile-details">
          <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
          </div>
          <div class="name-job">
            <div class="profile_name">{{ auth()->user()->name }}</div>
            <div class="job">Gerente</div>
          </div>
          <a href="{{ route('login.destroy') }}"><i class='bx bx-log-out'></i></a>
        </div>
      </li>
    </ul>
  </div>
 
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Menu principal</span>
    </div>


    <div class="container">

      <section class="main">
        <div class="main-top">
          <h1>Hola Gerente</h1>
          <i class="fas fa-user-cog"></i>
        </div>
        <div class="users">
          <div class="card">
            <h4 style="margin-top: 50px;">Usuarios</h4>
            <p>ver todos los usuarios</p>
            <button>Ver</button>
          </div>

          <div class="card">
            <h4 style="margin-top: 50px;">Entrenamiento</h4>
            <p>Ver rutinas</p>
            <button>ver</button>
          </div>
          <div class="card">

            <h4 style="margin-top: 50px;">Maquinaria</h4>
            <p>Ver maquinas</p>
            <button>ver</button>
          </div>

          <div class="card">
            <h4 style="margin-top: 50px;">Maquinaria</h4>
            <p>Ver reportes</p>
            <button>Ver</button>
          </div>
        </div>

        <section class="attendance">
          <div class="attendance-list">
            <h1>Lista de usuarios</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Rol</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($usuario as $usuario)
                <tr>
                  <td>
                    {{ $usuario->id }}
                  </td>
                  <td>
                    {{ $usuario->name }}
                  </td>
                  <td>
                    {{ $usuario->email }}
                  </td>
                  <td>
                    {{ $usuario->id_Role_FK() }}
                  </td>

                  @endforeach
              </tbody>
            </table>
          </div>
        </section>
      </section>
    </div>

  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


  <script>
    $(document).ready(function() {
      $('#usuarios').DataTable();
    });
  </script>
</body>

</html>