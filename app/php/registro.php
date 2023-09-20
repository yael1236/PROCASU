<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/animate.css">
	<link rel="stylesheet" href="../../css/all.css">
    <link rel="stylesheet" href="../../css/sb-admin-2.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>Registro CEMEFI</title>
</head>


<body>
<div class="p-2 mb-2 text-Black">
            <div class="col-md-7 mx-auto" >
                    <div class="mx-2 mx-md-5 my-md-3 my-5">
                    <h1 class="fw-light h3 mb-4 text-center ">PROCASU</h1>
                    <h2 class="fw-light color-h5 mb-4 text-center" style="font-size: 1.1em;">Estimado proveedor, solicitamos de tu apoyo para completar la siguiente información con el objetivo de realizar tu registro y alta de expediente.</h2>
        <form action="../../includes/upload.php" method="post" enctype="multipart/form-data">
                    <div class="mx-2 mx-md-3 my-md-3 my-3">
                    <div class="form-group" v-html="datos"></div>
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <h5 class="text-center" >Usuario</h5>
                    <input type="text"  name="usuarioi" id="usuario"class="form-control form-control-user mb-3" type="text" required >
                    </div>
                    <div class="col-sm-6">
                    <h5 class="text-center" >Nombre Comercial</h5>
                    <input type="text"name="nc" id="nc" class="form-control form-control-user mb-3" v-model="text" required />
                    </div>
                    </div>
                    <div class="form-group" v-html="datos"></div>
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0"> 
                    <h5 class="text-center" >Razón social</h5>
                    <input type="text"name="rs" id="rs" class="form-control form-control-user mb-3" v-model="text"  required />
                    </div>
                    <div class="col-sm-6">
                    <h5 class="text-center" >Nombre del director o directora general</h5>
                    <input type="text" name="nd" id="nd"class="form-control form-control-user mb-3" v-model="text"   required />
                    </div>
            </div>              
            <div class="">
  
                  </div>
                    <br><br><br>
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <h5 class="text-center" >CFS</h5>
                    <input type="file" style="padding: 7.9px; height:3.8rem; width: 28rem ; text-align: center;" name="archivo" id="archivo" class="form-control form-control-user mb-3"  required >
                    </div>
                    <div class="col-sm-6">
                    <h5 class="text-center" >INE representante legal</h5>
                    <input type="file" style="padding: 7.9px; height:3.8rem; width: 28rem ; text-align: center;" name="archivo1" id="archivo1" class="form-control form-control-user mb-3" required />
                    </div>
                    </div>
                    <div class="mx-2 mx-md-3 my-md-3 my-3">
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <h5 class="text-center" >Logo</h5>
                    <input  type="file" style="padding: 7.9px; height:3.8rem; width: 28rem ; text-align: center;" name="archivo2" id="archivo2" class="form-control form-control-user mb-3" required >
                    </div>
                    <div class="col-sm-6">
                    <h5 class="text-center" >NDA firmado </h5>
                    <input type="file" style="padding: 7.9px; height:3.8rem; width: 28rem ; text-align: center;" name="archivo3" id="archivo3" class="form-control form-control-user mb-3" required />
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <h5 class="text-center" >Acta constitutiva </h5>
                    <input type="file" style="padding: 7.9px; height:3.8rem; width: 28rem ; text-align: center;" name="archivo4" id="archivo4" class="form-control form-control-user mb-3" required>
                    </div>
                    </div>
                    <div style="text-align: center;">
                    <button name="registrar" class="btn btn-success form-control-user1 my-5" type="submit" style=" align-items: center; width:17rem; font-size: 1em; font-weight: bolder;">GUARDAR</button>
                    </div>
                </form>
                
            </div>
                    </div>
                    <div class="mt-5 h3" style="text-align: right;">
                  <a href="../../index.php" class="a"><i class="fa-solid fa-power-off"></i> Salir</a>
                </div>
</div>
</div>
</body>
<footer class="container-fluid pie">
		<br>
							<p class="text-center"><sup>©</sup> CORSEC. Todos los derechos reservados. | Diseñado por: <a href="http://corsec.com.mx/" class="text-muted">corsec.com.mx</a></p>
				<br>
				<p>Necesitas ayuda contactanos por correo:  <a href="mailto:celyncabrera19@gmail.com">celyncabrera19@gmail.com</a>
				</p>
                <br>
			</footer>
