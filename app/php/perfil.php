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

    <title>PROCASU</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- MENU -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <a href="inicio.php" class="text-light font-weight-bold mb-0">
                <H4>PROCASU</H4> </a>
            </div>
            <div class="menu">
                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-bookmarks lead"></i>
                    Biblioteca Digital</a>

                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-document lead"></i></i>
                    Herramientas PROCASU</a>

                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead"></i>
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
                                    <img src="../../img/usuario.jpg" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />
                                    Usuario
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Mi perfil</a>
                                    <a class="dropdown-item" href="#">Expediente</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Cerrar sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Datos Usuario</a>
                    </li>
                    
                </ul>
                <div class="tab-content" id="myTabContent">
                    <br>
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row">
                            <div class="col-4">
                            <img src="../../img/usuario.jpg" class="img-thumbnail" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="form-group row">
                                    <label for="codigo" class="col-2"> ID:</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="usuarop" class="col-2"> Usuario:</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-2"> Email:</label>
                                    <div class="col-8">
                                        <input type="email" class="form-control" value="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>

        </div>

    </div>





</body>

</html>