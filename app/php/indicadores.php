<!DOCTYPE html>
<html lang="es">

<head>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" rel="stylesheet">



    <!-- Styles -->
    <link rel="stylesheet" href="../../css/stylein.css">
    <link rel="stylesheet" href="../../style-nav.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Bootstrap Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<meta charset="UTF-8">
	
    <title>Indicadores</title>
</head>
<body>
<div class="d-flex" id="content-wrapper">

    <!-- MENU -->
    <div id="sidebar-container" class="bg-primary" style=" top:0; height:auto;">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">PROCASU</h4>
            </div>
            <div class="menu">
            <a href="#" class="m-3 d-inline-block btn  d-block  " style="padding:1rem; background-color: var(--procasu3); text-align: center; ">
                    <img src="../../img/Icono-Herramientas-PROCASU.png" alt="herramientas" class="iconos " style="margin-right: .5rem;">
                    Herramientas PROCASU
                </a>
                <br>
                <br>
                <a href="#" class="m-3 d-inline-block btn d-block   " style="padding:1rem; background-color: var(--procasu3); margin-left: rem;  ">
                    <img src="../../img/Icono-Biblioteca-Digital.png" alt="herramientas" class="iconos " style="margin-right: 3rem;">
                    Biblioteca Digital
                </a>
                <br>
                <a href="#" class="m-3 d-inline-block btn d-block " style="padding:1rem; background-color: var(--procasu3);   ">
                    <img src="../../img/Icono-Conoce-PROCASU.png" alt="herramientas" class="iconos " style="margin-right: 2rem;">
                    Conoce PROCASU
                </a>
                <br>
                <a href="../php/contacto.php" class="m-3 d-inline-block btn  d-block " style="padding:1rem; background-color: var(--procasu3); ">
                    <img src="../../img/Icono-Necesitas-Ayuda.png" alt="herramientas" class="iconos " style="margin-right: 2rem;">
                    ¿Necesitas Ayuda?
                </a>
            </div>
        </div>
    <!-- Fin MENU -->
        <div class="w-100">

         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg style="color: blue;" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
</svg>
                    nombre usuarios
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../php/perfil.php">Mi perfil</a>
                      <a class="dropdown-item" href="../php/expediente.php">Expediente</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../../index.php">Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <main style="height: 41.3rem; width:auto;">
          <div style="display: flex; margin:none; padding:none; ">
        <div class="container py-3 p-8">
                <h1 class="fs-4"></h1>
            <div class="row">
                <div class="container mt-5">
    <div class="row align-items-start">
        <div class="col-2">
                <div class="card-header bg-grey">
                <div class="card rounded-0 bg-grey">
                <div class="btn-group">
<button class="btn  dropdown-toggle p-2" type="button" style="background-color: white; color:black;" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
Commitment
</button>
<ul class="dropdown-menu">
<li>   
    <div class="card" style="width: 22rem;">
<div class="card-header">
  <h5>Gobernanza</h5>
  <ul class="list-group list-group-flush">
  <li class="list-group-item"> 
  <div class=" align-text-bottom ">
  <div class="btn-group">
<div class="row">

<div class="col-2"><a href="../php/Gobernanza.php" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
1
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
2
</a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
3
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
4
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
5
    </a>
</div>
<div class="w-100"></div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
6
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
7
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
8
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
9
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
10
    </a>
</div>
</div>
</div>
        </div>
  </div>
  </li> 
    <div class="card" style="width: 22rem;">
<div class="card-header">
  <h5>Global</h5>
  <ul class="list-group list-group-flush">
  <li class="list-group-item"> 
  <div class=" align-text-bottom ">
  <div class="btn-group">
<div class="row">

<div class="col-2"><a href="../php/Gobernanza.php" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
1
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
2
</a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
3
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
4
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
5
    </a>
</div>
<div class="w-100"></div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
6
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
7
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
8
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
9
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
10
    </a>
</div>
</div>
</div>
        </div>
  </div>
  </li> 
    <li><div class="card" style="width: 22rem;">
<div class="card-header">
  <h5>Social</h5>
  <ul class="list-group list-group-flush">
  <li class="list-group-item"> 
  <div class=" align-text-bottom ">
  <div class="btn-group">
<div class="row">

<div class="col-2"><a href="../php/Gobernanza.php" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
1
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
2
</a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
3
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
4
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
5
    </a>
</div>
<div class="w-100"></div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
6
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
7
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
8
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
9
    </a>
</div>
<div class="col-2"><a href="#" class="border my-2 mx-2 btn btn-outline-primary sub " style=" padding-right: 1rem; margin-left: 1rem;">
10
    </a>
</div>
</div>
</div>
        </div>
  </div>
  </li> 
  </ul>
</div>
    </div> 
     </div>
     </div>
        <div class="col-2">
        <div class="card-header bg-grey">
        <div class="card rounded-1 bg-grey">
        <div class="btn-group">
<button class="btn  dropdown-toggle p-2" type="button" style="background-color: white; color:black;" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
ESG Developer
</button>
        </div>
        </div>
        </div>
        </div>
        <div class="col-2">
        <div class="card-header bg-grey">
        <div class="card rounded bg-grey">
        <div class="btn-group">
<button class="btn  dropdown-toggle p-2" type="button" style="background-color: white; color:black;" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
ESG Mater
</button>
        </div>
        </div>
        </div>
        </div>
        <div class="col-2">
        <div class="card-header bg-grey">
        <div class="card rounded bg-grey">
        <div class="btn-group">
<button class="btn  dropdown-toggle p-2" type="button" style="background-color: white; color:black;" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
ESG Pro
</button>
        </div>
        </div>
        </div>
        </div>
        <div class="col-2">
        <div class="card-header bg-grey">
        <div class="card rounded bg-grey">
        <div class="btn-group">
<button class="btn  dropdown-toggle p-2" type="button" style="background-color: white; color:black;" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
ESG Leader
</button>
        </div>
        </div> 
        </div>
    </div>
    </div>
     </div>    
            </div>      
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         <div class="mt-5 h3" style="text-align:right;">
    <a href="inicio.php" class="a">
      <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2.7rem" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg> Regresar</a> 
</main>

<footer >
            <br>
					<p class="text-center">Copyright <sup>©</sup> 2023-2024 Procasu todos los derechos reservados </p>
				
            </footer>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'bar',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
                    datasets: [{
                        label: 'Nuevos usuarios',
                        data: [50, 100, 150, 200],
                        backgroundColor: [
                            '#12C9E5',  
                            '#12C9E5',
                            '#12C9E5',
                            '#111B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
        </div>
</div>


            </main>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body> 
</html>