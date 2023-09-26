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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>Document</title>
</head>
<body style="background-color: #c7c8ca;">
<div class=" mb-3" style="max-width: 100%; background-color: #c7c8ca;">
  <div class="row g-0">
    <div class="col-md-6">
      <img src="img/PROCASU.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-6" style="background-color: #c7c8ca;   align-content: center;">
    <br><br><br><br><br><br>
      <div class="">
      <h1 class="fw-light h3 mb-4 text-center">¡Bienvenido!</h1>
                        <form action="app/php/login.php" method="POST">
                            <input type="email" class="form-control form-control-user mb-3" placeholder="Correo Electrónico" name="Email">
                            <input type="password"  class="form-control form-control-user mb-3" placeholder="Contraseña" name="password" >

                            <div class="form-group" v-html="datos">
                            </div>
                            <button style="font-size:1.4rem; padding:.2rem;" class="btn btn-primary form-control form-control-user1 my-3" type="submit" value="Iniciar sesión">Inicio</button>
                        </form>
                        <hr>
                        <div style="display: flex;">
                        <div class="text-center">
                          <a href="docs/AvisoPrivacidad.pdf">Aviso de Privacidad</a>
                        </div>
                        <div class="text-center" style="margin-left:70%;">
                          <a href="docs/Vx-PR-ESR__php echo $Fecha; ____php echo $nomEmp; __ (7).pdf">Politicas</a>
                        </div>
                   </div>
                    </div>
    </div>
  </div>
</div>
</body>
<footer >    
<div style="display: flex;">
    <img src="img/PROCASUpie.jpeg" alt="proc" style="height: 4.3rem; ">
    <div style="width: 28rem; padding-top:.3rem; margin-left:1rem;">
    <p style="font-size: .5rem;">PROGRAMA PARA EL DESARROLLO DE LA SUSTENTABILIDAD EN LA CADENA DE SUMINISTRO</p>
    </td>
   
    </div>
</div>
</footer>
</html>