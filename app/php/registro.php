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
                    <form action="" method="post">
                    <div class="mx-2 mx-md-3 my-md-3 my-3">
                    <div class="form-group" v-html="datos"></div>
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <h5 class="text-center" >Usuario</h5>
                    <input class="form-control form-control-user mb-3" type="text" required >
                    </div>
                    <div class="col-sm-6">
                    <h5 class="text-center" >Nombre Comercial</h5>
                    <input type="password" class="form-control form-control-user mb-3" v-model="passUsrDos" required />
                    </div>
                    </div>
                    <div class="form-group" v-html="datos"></div>
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0"> <br>
                    <h5 class="text-center" >Razon social</h5>
                    <input type="password" class="form-control form-control-user mb-3" v-model="passUsr"  required />
                    </div>
                    <div class="col-sm-6">
                    <h5 class="text-center" >Nombre del director o directora general</h5>
                    <input type="password" class="form-control form-control-user mb-3" v-model="passUsrDos"   required />
                    </div>
            </div>              
            <div class="">
                    <div class="form-group" v-html="datos">
                        
                    </div>
                    <br><br><br>
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <h5 class="text-center" >CFS</h5>
                    <input class="form-control form-control-user mb-3" type="text" required >
                    </div>
                    <div class="col-sm-6">
                    <h5 class="text-center" >INE representante legal</h5>
                    <input type="password" class="form-control form-control-user mb-3" v-model="passUsrDos" required />
                    </div>
                    </div>
                    <div class="mx-2 mx-md-3 my-md-3 my-3">
                    <div class="form-group" v-html="datos"></div>
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <h5 class="text-center" >Logo</h5>
                    <input class="form-control form-control-user mb-3" type="text" required >
                    </div>
                    <div class="col-sm-6">
                    <h5 class="text-center" >NDA firmado </h5>
                    <input type="password" class="form-control form-control-user mb-3" v-model="passUsrDos" required />
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <h5 class="text-center" >acta constitutiva </h5>
                    <input type="password" class="form-control form-control-user mb-3" v-model="passUsrDos" required />
                    </div>
                    </div>
                    <button >Guardar</button>
            </div>
                    </div>
                    