<!doctype html>
<html lang="en">
<!-- Comit-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="../../css/stylebetzy.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <title>Comité</title>
</head>

<body>
  <div class="d-flex" id="content-wrapper">

    <!-- MENU -->
    <div id="sidebar-container" class="bg-primary" style=" top:0; height:auto;">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">PROCASU</h4>
            </div>
            <div class="menu">
            <a href="inicio.php" class="d-block text-light p-3 border-0"><img src="../../img/Iconos_png/Icono-Sitio-web.png" class="icon ion-md-people lead mr-2" style="width:50px;">
                    Home</a>
                    <a href="#" class="d-block text-light p-3 border-0"><img src="../../img/Iconos_png/Icono-Modelos-de-Gestion.png" class="icon ion-md-people lead mr-2" style="width:50px;">
                    Modelo de gestión</a>
                <a href="#" class="d-block text-light p-3 border-0"><img src="../../img/Iconos_png/Icono-Biblioteca-Digital.png" class="icon ion-md-people lead mr-2" style="width:50px;">
                    Biblioteca Digital</a>

                <a href="#" class="d-block text-light p-3 border-0"><img src="../../img/Iconos_png/Icono-Herramientas-PROCASU.png" class="icon ion-md-people lead mr-2" style="width:50px;">
                    Herramientas PROCASU</a>          

                <a href="contacto-html-php/contacto.php" class="d-block text-light p-3 border-0"><img src="../../img/Iconos_png/Icono-Correo.png" class="icon ion-md-people lead mr-2" style="width:50px;">
                    Ayuda</a>

                <a href="#" class="d-block text-light p-3 border-0"><img src="../../img/Iconos_png/Icono-Usuario.png" class="icon ion-md-people lead mr-2" style="width:50px;">
                    Nosotros</a>
                    <a href="#" class="d-block text-light p-3 border-0"><img src="../../img/Iconos_png/Icono-Conoce-PROCASU.png" class="icon ion-md-people lead mr-2" style="width:50px;">
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
                  <img src="../../img/Iconos_png/Icono-Usuario.png" class="img-fluid rounded-circle avatar mr-2" alt=" " />
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
            <div style="padding: 3rem; display:flex; width:100%;">
              <img src="../../img/usuario.jpg"  style="width:10rem;">
              <h1 style="margin-left: 1rem;">Usuario 1</h1>
               <!-- Button trigger modal -->
               <div style="margin-left:43%;">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Añadir comité
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega a los miembros de tú comité</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor agregar mínimo 6 miembros maximo 10</p>
        <form action="#">
                        <label for="size_3">Fotografía del Integrante</label>
                        <input type="file" placeholder='Fotografía del Integrante'>
                        <br>
                        <label for="">Nombre</label>
                        <input type="text" placeholder='Nombre del Integrante' style="margin-top: 1rem;">
                        <br>
                        <label for="">Puesto</label>
                        <input type="text" placeholder='Puesto' style="margin-top: 1rem;">
                        <br>
                        <label for="">RFC</label>
                        <input type="text" placeholder='RFC' style="margin-top: 1rem;">
                        <br>
                        <label for="">Correo</label>
                        <input type="text" placeholder='Correo' style="margin-top: 1rem;">
                        <br>
                        <label for="">Número de contacto</label>
                        <input type="text" placeholder='Número de contacto' style="margin-top: 1rem;">
                        <br>
                        <label for="">Contacto adicional</label>
                        <input type="text" placeholder='Contacto adicional' style="margin-top: 1rem;">
                        <hr>
                        <label for="size_3">Fotografía del Integrante</label>
                        <input type="file" placeholder='Fotografía del Integrante'>
                        <br>
                        <label for="">Nombre</label>
                        <input type="text" placeholder='Nombre del Integrante' style="margin-top: 1rem;">
                        <br>
                        <label for="">Puesto</label>
                        <input type="text" placeholder='Puesto' style="margin-top: 1rem;">
                        <br>
                        <label for="">RFC</label>
                        <input type="text" placeholder='RFC' style="margin-top: 1rem;">
                        <br>
                        <label for="">Correo</label>
                        <input type="text" placeholder='Correo' style="margin-top: 1rem;">
                        <br>
                        <label for="">Número de contacto</label>
                        <input type="text" placeholder='Número de contacto' style="margin-top: 1rem;">
                        <br>
                        <label for="">Contacto adicional</label>
                        <input type="text" placeholder='Contacto adicional' style="margin-top: 1rem;">
                        <hr>
                        <hr>
                        <label for="size_3">Fotografía del Integrante</label>
                        <input type="file" placeholder='Fotografía del Integrante'>
                        <br>
                        <label for="">Nombre</label>
                        <input type="text" placeholder='Nombre del Integrante' style="margin-top: 1rem;">
                        <br>
                        <label for="">Puesto</label>
                        <input type="text" placeholder='Puesto' style="margin-top: 1rem;">
                        <br>
                        <label for="">RFC</label>
                        <input type="text" placeholder='RFC' style="margin-top: 1rem;">
                        <br>
                        <label for="">Correo</label>
                        <input type="text" placeholder='Correo' style="margin-top: 1rem;">
                        <br>
                        <label for="">Número de contacto</label>
                        <input type="text" placeholder='Número de contacto' style="margin-top: 1rem;">
                        <br>
                        <label for="">Contacto adicional</label>
                        <input type="text" placeholder='Contacto adicional' style="margin-top: 1rem;">
                        <hr><hr>
                        <label for="size_3">Fotografía del Integrante</label>
                        <input type="file" placeholder='Fotografía del Integrante'>
                        <br>
                        <label for="">Nombre</label>
                        <input type="text" placeholder='Nombre del Integrante' style="margin-top: 1rem;">
                        <br>
                        <label for="">Puesto</label>
                        <input type="text" placeholder='Puesto' style="margin-top: 1rem;">
                        <br>
                        <label for="">RFC</label>
                        <input type="text" placeholder='RFC' style="margin-top: 1rem;">
                        <br>
                        <label for="">Correo</label>
                        <input type="text" placeholder='Correo' style="margin-top: 1rem;">
                        <br>
                        <label for="">Número de contacto</label>
                        <input type="text" placeholder='Número de contacto' style="margin-top: 1rem;">
                        <br>
                        <label for="">Contacto adicional</label>
                        <input type="text" placeholder='Contacto adicional' style="margin-top: 1rem;">
                        <hr><hr>
                        <label for="size_3">Fotografía del Integrante</label>
                        <input type="file" placeholder='Fotografía del Integrante'>
                        <br>
                        <label for="">Nombre</label>
                        <input type="text" placeholder='Nombre del Integrante' style="margin-top: 1rem;">
                        <br>
                        <label for="">Puesto</label>
                        <input type="text" placeholder='Puesto' style="margin-top: 1rem;">
                        <br>
                        <label for="">RFC</label>
                        <input type="text" placeholder='RFC' style="margin-top: 1rem;">
                        <br>
                        <label for="">Correo</label>
                        <input type="text" placeholder='Correo' style="margin-top: 1rem;">
                        <br>
                        <label for="">Número de contacto</label>
                        <input type="text" placeholder='Número de contacto' style="margin-top: 1rem;">
                        <br>
                        <label for="">Contacto adicional</label>
                        <input type="text" placeholder='Contacto adicional' style="margin-top: 1rem;">
                        <hr><hr>
                        <label for="size_3">Fotografía del Integrante</label>
                        <input type="file" placeholder='Fotografía del Integrante'>
                        <br>
                        <label for="">Nombre</label>
                        <input type="text" placeholder='Nombre del Integrante' style="margin-top: 1rem;">
                        <br>
                        <label for="">Puesto</label>
                        <input type="text" placeholder='Puesto' style="margin-top: 1rem;">
                        <br>
                        <label for="">RFC</label>
                        <input type="text" placeholder='RFC' style="margin-top: 1rem;">
                        <br>
                        <label for="">Correo</label>
                        <input type="text" placeholder='Correo' style="margin-top: 1rem;">
                        <br>
                        <label for="">Número de contacto</label>
                        <input type="text" placeholder='Número de contacto' style="margin-top: 1rem;">
                        <br>
                        <label for="">Contacto adicional</label>
                        <input type="text" placeholder='Contacto adicional' style="margin-top: 1rem;">
                        <hr>
                        <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                             <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
      </div>
      
    </div>
  </div>
</div>
               </div>
<!-- fin modal-->
      
            </div>
            <div  style="padding-left:3rem;display:flex; width:90%;">
            <table style="border-collapse:separate; border-spacing:.5rem; border-color:black;   border-radius: .4rem; " class="table  table-primary ">
                <tr>
                  <td> Nombre</td>  
                  <td> ...</td>
                </tr>
                <tr>
                  <td> Puesto</td>  
                  <td> ...</td>
                </tr>
                <tr>
                  <td> RFC</td>  
                  <td> ...</td>
                </tr>
                <tr>
                  <td> Numero de contacto</td>  
                  <td> ...</td>
                </tr>
                <tr>
                  <td> Correo</td>  
                  <td> ...</td>
                </tr>
                <tr>
                  <td> Contacto adicional</td>  
                  <td> ...</td>
                </tr>
              </table>
            </div>
            <div style="padding: 3rem; display:flex; width:100%;">
              <img src="../../img/usuario.jpg"  style="width:10rem;">
              <h1 style="margin-left: 1rem;">Usuario 2</h1>
            </div>
            <div  style="padding-left:3rem;display:flex; width:90%;">
            <table style="border-collapse:separate; border-spacing:.5rem; border-color:black;   border-radius: .4rem; " class="table  table-primary ">
                <tr>
                  <td> Nombre</td>  
                  <td> ...</td>
                </tr>
                <tr>
                  <td> Puesto</td>  
                  <td> ...</td>
                </tr>
                <tr>
                  <td> RFC</td>  
                  <td> ...</td>
                </tr>
                <tr>
                  <td> Numero de contacto</td>  
                  <td> ...</td>
                </tr>
                <tr>
                  <td> Correo</td>  
                  <td> ...</td>
                </tr>
                <tr>
                  <td> Contacto adicional</td>  
                  <td> ...</td>
                </tr>
              </table>
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