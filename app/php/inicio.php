<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Styles -->
  <link rel="stylesheet" href="../../css/estilosinicio-perfil.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

  <!-- Ionic icons -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

  <!-- Bootstrap Iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <title>PROCASU</title>
</head>

<body>
  <div class="d-flex" id="content-wrapper">

    <!-- MENU -->
    <div id="sidebar-container" class="bg-primary">
      <div class="logo">
        <h4 class="text-light font-weight-bold mb-0">PROCASU</h4>
      </div>
      <div class="menu p-2">
        <div>
          <a href="#" class="m-4 btn border border-info btn-light disabled font-weight-lighter">
            Herramientas PROCASU</a>
        </div>


        <a href="#" class="m-4 btn border border-info btn-light disabled font-weight-lighter">
          Biblioteca PROCASU</a>

        <a href="#" class="m-4 btn border border-info btn-light disabled font-weight-lighter ">
          Conoce PROCASU</a>
      </div>
    </div>
    <!-- Fin MENU -->

    <div class="w-100">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="../../img/usuario.jpg" class="img-fluid rounded-circle avatar mr-2" alt=" " />
                  Usuario
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="perfil.php">Mi perfil</a>
                  <a class="dropdown-item" href="expediente.php">Expediente</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../hola.php">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Fin Navbar -->

      <!-- cuadro -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 my-3">
              <div class="card rounded-0">
                <div class="card-header bg-light">
                  <h6 class="font-weight-bold mb-0">Modelo de Gestión</h6>
                </div>
                <a href="comite.php" class=" m-3 btn btn-outline-primary  largo">
                  Comité
                </a>
                <div class="conbnt">
                  <a href="#" class="m-3 btn btn-outline-primary ">
                    Plamificación
                  </a>
                  <a href="../php/indicadores.php" class="m-3 btn btn-outline-primary ">
                    Gestión Integral
                  </a>
                  <a href="#" class="m-3 btn btn-outline-primary ">
                    Buenas Practicas
                  </a>
                </div>
                <a href="#" class="m-3 btn btn-outline-primary largo ">
                  Materalidad
                </a>
                <a href="#" class=" m-4 btn btn-primary  ">
                  Comunicación
                </a>
                <div class=" m-1 conbnt ">
                  <a href="#" class=" m-2 btn btn-outline-primary ">
                    Commitment
                  </a>
                  
                  <a href="#" class="p-2 m-2 btn btn-outline-primary ">
                    ESG Developer
                  </a>
                  <a href="#" class=" m-2 btn btn-outline-primary ">
                    ESG Mater
                  </a>
                  <a href="#" class=" m-2 btn btn-outline-primary ">
                    ESG Pro
                  </a>
                  <a href="#" class=" m-2 btn btn-outline-primary ">
                    ESG Leader
                  </a>
                </div>
                <div class="m-2 progress" >
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div>
                <div class="card-body">
                  <canvas id="myChart" width="400" height="250"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-4 my-3">
              <div class="card rounded-0">
                <div class="card-header bg-light">
                  <h6 class="font-weight-bold mb-0">Notificaciones</h6>
                </div>

                <button class="btn btn-primary w-100">Ver todas</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>

  </div>


  <!-- Footer -->
  <footer class="pie-pagina">
    <div class="grupo-2  border border-procasu border-top-8">
      <small>&copy; 2023-2024 <b>Procasu</b> Todos los Derechos Reservados.</small>

    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

</body>

</html>