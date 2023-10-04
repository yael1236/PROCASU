<?php

    session_start();
    
        if(isset($_SESSION['$Email'])){
        header("location: app/php/registro.php");
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>Document</title>
</head>
<body style="background-color: #c7c8ca;">
<div class=" mb-3" style="max-width: 100%; background-color: #c7c8ca;">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="img/PROCASU.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5" style="background-color: #c7c8ca;">
        <br><br><br>
      <div class="">
      <h1 class="fw-light h3 mb-4 text-center">¡Bienvenido!</h1>
                        <h2 class="fw-light h5 mb-4 text-center" style="font-size: 1.1em;">Sistema de Cotizaciones.</h2>
                        <form action="app/php/login.php" method="POST">
                            <input type="email" class="form-control form-control-user mb-3" placeholder="Correo Electrónico" name="Email">
                            <input type="password"  class="form-control form-control-user mb-3" placeholder="Contraseña" name="password" >

                            <div class="form-group" v-html="datos">
                            </div>
                            <button style="font-size:1.4rem; padding:.2rem;" class="btn btn-primary form-control form-control-user1 my-3" type="submit" value="Iniciar sesión">Inicio</button>
                        </form>
                        <hr>
                        <div class="text-center">
                           <p>Grupo CORSEC le agradece su confianaza</p>
                        </div>
                    </div>
    </div>
  </div>
</div>
</body>
<footer >    
<div style="display: flex;">
    <img src="img/PROCASUpie.jpeg" alt="proc" style="height: 4.3rem;">
    <div style="width: 28rem; padding-top:.3rem;">
    <p>PROGRAMA PARA EL DESARROLLO DE LA SUSTENTABILIDAD EN LA CADENA DE SUMINISTRO</p>
    </div>
</div>
</footer>
</html>