<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BD_UNI</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
   <link rel="shortcut icon" href="images/u.png" type="image/x-icon">
  
</head>
   
   
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">

   <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <img src="images/u.png" width="30" class="d-inline-block alingn-top" alt="Logo UNI">
    <a class="navbar-brand" href="index.html">Base de Datos</a>
            
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumnos">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAlumnos" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Alumnos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseAlumnos">
            <li>
              <a href="index.html">Pruebas</a> 
            </li>
            <li>
              <a href="index.html">Examenes</a> 
            </li>
              <li>
                  <a href="index.html">Laboratorios</a>
              </li>
          </ul>
        </li>
         
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="portada.html">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Enlaces de Interes</span>
          </a>
        </li>
      </ul> 
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left">Cerrar</i>
          </a>
        </li>
      </ul> 
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Mensajes
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Nuevos Mensajes:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">1111111111111111111111111111111</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">Ver todos los mensajes</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Alertas</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="portada.php" >
            <i class="fa fa-fw fa-sign-out" ></i>Salir</a>
        </li>
      </ul>
    </div>
        </nav>
            
          <!--*************Comienzo del contenido del contenido de las unidades*******-->
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Alumnos</a>
        </li>
        <li class="breadcrumb-item active">Base de datos Unidades</li>
      </ol>
        </div>
        
            <!--*************************carroussel******************************-->
        
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="rounded mx-auto d-block" src="images/fam.jpg" alt="Responsive image" width="40%">
        </div>
        <div class="carousel-item">
           <img class="rounded mx-auto d-block" src="images/fam.jpg" alt="Responsive image" width="40%">
        </div>
        <div class="carousel-item">
            <img class="img-fluidrounded mx-auto d-block" src="images/fam.jpg" alt="Responsive image" width="40%">
        </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
             </a>
        </div>
        
                    <!-- *******************Table************************************************************** -->
<div class="table-responsive-md ">

    <table class="table" >
        <tbody>    
        
               <thead>
                <center>  <th1><h4>Descripcion de las unidades</h4></th1></center> 
                   
               </thead>
                
                <tr style="height: 83px;">
                <td style="width: 24px; height: 83px;">&nbsp;
                
                <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                    <div class="card text-white bg-primary  o-hidden h-100">
                        <div class="card-body">    
                          <h6 class="card-title"><b>Unidad I:</b></h6>
                            <p class="card-text">Introducción a las Bases de Datos</p>
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list">I</i>
                          </div>
                          <div class="mr-5"><b aling="justify"></b></div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Contenido:</a>
                              <a class="dropdown-item" href="#">1.1	Panorama de un sistema de bases de datos</a>
                              <a class="dropdown-item" href="#">1.2	Sistemas manejadores de bases de datos (SMBD)</a>
                              <a class="dropdown-item" href="#">1.3	Objetivo de un SMBD</a>
                              <a class="dropdown-item" href="#">1.4	Los tres niveles de arquitectura de un SMBD</a>
                              <a class="dropdown-item" href="#">1.5	Componentes de un SMBD</a>    
                               <a class="dropdown-item" href="#">1.6	Ventajas y desventajas de un SMBD</a> 
                          </div>   
                         </div> 
                    </div>
                </td>
                <td style="width: 24%; height: 83px;">&nbsp;
                     <p aling="Justify" aling-text="center" >Definir el concepto y el objetivo principal de las bases de datos determinando al menos tres elementos que la definan como tal</p>
                   </td>
                    <td style="width: 24%; height: 83px;">&nbsp;
                     <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                                    
                    <div class="card text-white bg-primary  o-hidden h-100">
                        <div class="card-body">    
                          <h6 class="card-title"><b>Unidad II:</b></h6>
                           <p class="card-text"> Modelo de Datos Relacional</p>
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list">II</i>
                          </div>
                          <div class="mr-5"><b aling="justify"></b></div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">	Definición de:</a>
                              <a class="dropdown-item" href="#">2.1 Modelo Conceptual.</a>
                              <a class="dropdown-item" href="#">Modelo Jerárquico.</a>
                              <a class="dropdown-item" href="#">Modelo de Redes.</a>
                              <a class="dropdown-item" href="#">2.2	Modelo Entidad relación.</a>
                              <a class="dropdown-item" href="#">2.3	Modelo de Objetos.</a> 
                              <a class="dropdown-item" href="#">2.4	Bases de datos relacionales.</a>    
                              <a class="dropdown-item" href="#">2.5	Elementos de las bases de datos relacionales:</a>    
                              <a class="dropdown-item" href="#">2.5.1 Tuplas, tablas o entidades.</a>    
                              <a class="dropdown-item" href="#">2.5.2	Atributos dominios</a>
                              <a class="dropdown-item" href="#">2.5.3	Relaciones.</a>
                             <a class="dropdown-item" href="#">2.5.4	Cardinalidades de las relaciones.</a>
                             <a class="dropdown-item" href="#">2.6	Reglas de integridad.</a>
                             <a class="dropdown-item" href="#">2.7	Pasos para pasar del modelo entidad relación al modelo relacional.</a>
                          </div>   
                         </div> 
                    </div>
                    </td>
                <td style="width: 398.152%; height: 83px;"> &nbsp;<p aling="Justify" aling-text="center" >Definir el concepto y el objetivo principal del modelo de entidad relación mediante la solución de un problema de estudio   </p> </td>
                </tr>
                <tr style="height: 80px;">
                 
                <td style="width: 24%; height: 80px;">&nbsp;
                     <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                     <div class="card text-white bg-primary  o-hidden h-100">
                        <div class="card-body">    
                          <h6 class="card-title"><b>Unidad III:</b></h6>
                           <p class="card-text"> Modelo Relacional</p>
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list">III</i>
                          </div>
                          <div class="mr-5"><b aling="justify"></b></div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Action</a>
                              <a class="dropdown-item" href="#">3.1	Definición de la Dependencias funcionales.</a>
                              <a class="dropdown-item" href="#">3.2	Formas normales 1, 2, 3, FNBC,4 y 5FN.</a>
                              <a class="dropdown-item" href="#">3.3	Proceso de normalización.</a>
                              <a class="dropdown-item" href="#">3.4	Diseño del Modelo Relacional.</a>
                             
                          </div>   
                         </div> 
                    </div>
                </td>
                <td style="width: 24%; height: 80px;">&nbsp;<p aling="Justify" aling-text="center" >Definir el concepto y el objetivo principal del modelo relacional en el trabajo de fin de curso </p> </td>
                <td style="width: 24%; height: 80%;">&nbsp;
                     <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                    <div class="card text-white bg-primary  o-hidden h-100">
                        <div class="card-body">    
                          <h6 class="card-title"><b>Unidad IV:</b></h6>
                           <p class="card-text">Lenguaje de Consulta en Transact SQL</p>
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list">IV</i>
                          </div>
                          <div class="mr-5"><b aling="justify"></b></div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Action</a>
                              <a class="dropdown-item" href="#">4.1	Definición de Algebra relacional.</a>
                              <a class="dropdown-item" href="#">4.2	Definición del lenguaje de consulta (Secuency Query Language) SQL.</a>
                              <a class="dropdown-item" href="#">4.3	Definición de datos.</a>
                              <a class="dropdown-item" href="#">4.4	Manipulación de datos.</a>
                             
                          </div>   
                         </div> 
                    </div>
                    
                    </td>
                <td style="width: 398.152%; height: 80px;">&nbsp; <p aling="Justify" aling-text="center" >Definir las operaciones del algebra relacional y los tres lenguajes que son parte de Transact SQL a través del gestor de bases de datos SQL Server </p></td>
                </tr>
                <tr style="height: 72px;">
                <td style="width: 24%; height: 72px;">&nbsp;
                    <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                    <div class="card text-white bg-primary  o-hidden h-100">
                        <div class="card-body">    
                          <h6 class="card-title"><b>Unidad V:</b></h6>
                           <p class="card-text">Bases de Datos Cliente Servidor y Distribuida</p>
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list">V</i>
                          </div>
                          <div class="mr-5"><b aling="justify"></b></div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Action</a>
                              <a class="dropdown-item" href="#">5.1	Introducción a las bases de datos cliente servidor.</a>
                              <a class="dropdown-item" href="#">5.2	Características la arquitectura cliente servidor.</a>
                              <a class="dropdown-item" href="#">5.3	Ventajas y desventajas de las arquitectura cliente servidor.</a>
                              <a class="dropdown-item" href="#">5.4	Introducción a las bases de datos distribuidas.</a>
                              <a class="dropdown-item" href="#">5.5	Técnicas de distribución de datos.</a> 
                               <a class="dropdown-item" href="#">5.6	Ventajas y desventajas de las bases de datos distribuidas.</a>      
                          </div>   
                         </div> 
                    </div>    
                   
                    </td>
                <td style="width: 24%; height: 72px;">&nbsp;<p aling="Justify" aling-text="center" >Definir que son las bases de datos cliente servidor y las bases de datos distribuida a través de un caso de estudio real </p></td>
                <td style="width: 24%; height: 72px;">&nbsp;
                 <div class="dropdown show" >
                    <!--div class="col-xl-3 col-sm-6 mb-3"-->
                   <div class="card text-white bg-primary  o-hidden h-100">
                        <div class="card-body">    
                          <h6 class="card-title"><b>Unidad VI:</b></h6>
                           <p class="card-text">Metodología de Desarrollo de Sistemas de Bases de Datos</p>
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list">VI</i>
                          </div>
                          <div class="mr-5"><b aling="justify"></b></div>
                        </div>
                    </div>
                     <div class=" text-white bg-primary o-hidden h-100">    
                        <button type="button" class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                          <span class="float-left">Ver Detalles</span>
                          <span class="float-right">
                            <i class="fa fa-angle"></i>
                          </span>
                        </button> 

                          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#" aling="center">Action</a>
                              <a class="dropdown-item" href="#">6.1	Análisis y recolección de requerimientos del  caso de estudio práctico.</a>
                              <a class="dropdown-item" href="#">6.2	Selección de SMBD de acuerdo a la arquitectura.</a>
                              <a class="dropdown-item" href="#">6.3	Implementación y pruebas del sistema de bases de datos.</a>
                               
                          </div>   
                         </div> 
                    </div>
                </td>
                <td style="width: 398.152%; height: 72px;">&nbsp;<p aling="Justify" aling-text="center" >Definir el proceso de análisis y recolección de los requerimientos para el diseño de una base de datos a través de un caso de estudio </p></td>
                </tr>
        </tbody>
</table>
  </div>


    
   <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Base de Datos derechos reservados 2018 </small><a href="#"> UNI</a> 
        </div>
      </div>
    </footer>
  
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Seguro que desea Salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Seleccione la opcion de salir si esta seguro!!</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="portada.php">Salir</a>
              </div>
            </div>
          </div>
        </div>   
        
        <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
