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
                  <img src="img/usuario.jpg" class="img-fluid rounded-circle avatar mr-2" alt=" " />
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





      <!--datos -->
      <section>
        <div class="container">
          <div class="row">
            <h1>Datos del usuario</h1>
            <div class="row">
              <div class="col-5 p-5">
                <img class="img-thumbnail" src="img/usuario.jpg" alt="">
                <br>
                <div class="form-group">
                  <br>
                  <input class='filestyle' data-buttonText="Logo" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
                </div>
              </div>
              <div class="col-md-6">
                <form>
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de la razón social</label>
                    <input type="text" class="form-control" id="nombre">
                  </div>
                  <div class="mb-3">
                    <label for="rfc" class="form-label">RFC</label>
                    <input type="text" class="form-control" id="rfc" placeholder="RFC">
                  </div>
                  <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion">
                  </div>
                  <div class="mb-3">
                    <label for="nombreComercial" class="form-label">Nombre comercial</label>
                    <input type="text" class="form-control" id="nombreComercial">
                  </div>
                  <div class="mb-3">
                    <label for="nombreColaboradores" class="form-label">Número de colaboradores</label>
                    <input type="text" class="form-control" id="nombreColaboradores">
                  </div>
                  <div class="mb-3">
                    <label for="sector" class="form-label">Sector</label>
                    <input type="text" class="form-control" id="sector">
                  </div>
                  <div class="mb-3">
                    <label for="principales" class="form-label">Principales productos o servicios</label>
                    <input type="text" class="form-control" id="principales">
                  </div>
                  <div class="mb-3">
                    <label for="contacto" class="form-label">Nombre del contacto</label>
                    <input type="text" class="form-control" id="contacto">
                  </div>
                  <div class="mb-3">
                    <label for="numcontacto" class="form-label">Número de contacto</label>
                    <input type="text" class="form-control" id="numcontacto">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="text" class="form-control" id="email">
                  </div>
                  <div class="mb-3">
                    <label for="numempresa" class="form-label">Número de la empresa</label>
                    <input type="text" class="form-control" id="numempresa">
                  </div>
                  <div class="mb-3">
                    <label for="responsable" class="form-label">Nombre del responsable</label>
                    <input type="text" class="form-control" id="responsable">
                  </div>
                  <div class="mb-3">
                    <label for="direcgen" class="form-label">Nombre del director general</label>
                    <input type="text" class="form-control" id="direcgen">
                  </div>
                  <div class="mb-3">
                    <label for="emaildirecgen" class="form-label">Correo del director general</label>
                    <input type="text" class="form-control" id="emaildirecgen">
                  </div>
                  <div class="mb-3">
                    <label for="add" class="form-label">Contacto adicional (opcional)</label>
                    <input type="text" class="form-control" id="add">
                  </div>
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                  <br>
                  <br>
                </form>
              </div>
            </div>
          </div>
      </section>

    </div>


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