<?php
session_start();
include '../../admin/conex.php';
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["idNiveles"] == 3) {
            $user = $_SESSION['NombreUsuario'];
            $codigo = $_SESSION["Codigo"];

                $consulta=mysqli_query($conex,"select Foto from estudiantes where idEstudiantes = $codigo");                  
                while($filas=mysqli_fetch_array($consulta)){
                         $foto=$filas['Foto'];                           
                 }

                 $consulta2 = mysqli_query($conex,"select concat (NombresEstudiante, ' ', ApellidosEstudiante) as Estudiante from estudiantes where idEstudiantes = $codigo"); 
                 while($filas2=mysqli_fetch_array($consulta2)){
                         $estudiante=$filas2['Estudiante'];                           
                 }
                
?>
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

    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/estilo.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../images/u.png" type="image/x-icon">


</head>


<style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <img src="../../images/uni1.gif" width="30" class="d-inline-block alingn-top" alt="Logo UNI">
        <a class="navbar-brand" href="../index.php">Bases de Datos</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumnos">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAlumnos" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-wrench"></i>
                        <span class="nav-link-text">Unidad I:</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseAlumnos">
                        <li>
                            <a href="index.html">1.1 Panorama de un sistema de bases de datos</a>
                        </li>
                        <li>
                            <a href="index.html">1.2 Sistemas manejadores de bases de datos (SMBD)</a>
                        </li>
                        <li>
                            <a href="index.html">1.3 Objetivo de un SMBD</a>

                        </li>
                        <li>
                            <a href="index.html">1.4 Los tres niveles de arquitectura de un SMBD</a>

                        </li>
                        <li>
                            <a href="index.html"> 1.5 Componentes de un SMBD</a>

                        </li>
                        <li>
                            <a href="index.html"> 1.6 Ventajas y desventajas de un SMBD</a>

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
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="index.php">
                        <i class="fa fa-fw fa-sign-out"></i>Salir</a>
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
                    <a href="../estudiantes.php">Alumnos</a>
                </li>
                <li class="breadcrumb-item active">Unidad I: Panorama de un sistema de bases de datos</li>
            </ol>
        </div>

        <!--************boton de atras y adelante*****************-->

        <button id='1' class='previous btn btn-success' type='button'>
            <span class="fa fa-arrow-circle-left"></span> Anterior </button>

        <button id='1' class='next btn btn-success chevron-right' type='button'>
            Siguiente <span class="fa fa-arrow-circle-right"> </span> </button>


        <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
        <div class="w3-main" style="margin-left:auto">
            <!-- Page Content -->
            <div class="container">

                <div class="row">

                    <!-- Post Content Column -->
                    <div class="col-lg-8">

                        <!-- Title -->
                        <h1 class="mt-4">UNIDAD I.</h1>

                        <!-- Author -->
                        <p class="lead">

                            <a href="#">INTRODUCCIÓN A LAS BASES DE DATOS</a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p>Posted on January 1, 2018 at 12:00 PM</p>

                        <hr>


                        <h5> <a href="#">Ventajas de los sistemas de BD frente a los archivos clásicos:</a></h5>
                        <!-- Post Content -->
                        <hr>
                        <p ALIGN="justify"><b>1.</b>	Independencia de los datos respecto a los tratamientos y viceversa. La mutua independencia de datos y tratamientos lleva a que un cambio de estos últimos no imponga un nuevo diseño de la BD. Por otra parte, la inclusión de nueva información, desaparición de otra, cambios en la estructura física, etc., no deben obligar a alterar los programas.</p>

                        <p ALIGN="justify"><b>2.</b>	Coherencia de resultados. Debido a que la información de la BD se recoge y almacena    una sola vez, en los tratamientos se utilizan los mismos datos, por lo que los resultados    de todos ellos son coherentes y perfectamente comparables.</p>

                        <p ALIGN="justify"><b>3.</b>Mejor disponibilidad de los datos para el conjunto de los usuarios. Cuando se aplica la    metodología de BD, cada usuario ya no es propietario de sus datos, puesto que estos se    comparten entre el conjunto de aplicaciones, existiendo una mejor disponibilidad de los    datos para todos los que necesiten de ellos, siempre que estén autorizados para su acceso.
                        </p>

                        <p ALIGN="justify"><b>4.</b>Mayor valor informativo. Puesto que la BD ha de ser reflejo del mundo real, en ella se    recogen las interrelaciones entre los datos, por lo que el valor informativo del conjunto es    superior a la suma del valor informativo de los elementos individuales que lo constituyen.</p>

                        <p ALIGN="justify"><b>5.</b>Mejor y más normalizada documentación de la información, la cuál está integrada con los    datos. La documentación de los datos, realizada por el analista o programador, es en    general insuficiente, y a veces incluso inexistente, además no existe la estandarización. Este problema se atenúa con las BD, ya que en la misma base se incluyen no sólo los datos, sino también la semántica de los mismos.</p>

                        <p ALIGN="justify"><b>6.</b>Mayor eficiencia en la recolección, validación e introducción de los datos en el sistema. Al    disminuir las redundancias (repeticiones), los datos se recogen y validan una sola vez,    aumentando así el rendimiento de todo el proceso previo al almacenamiento.</p>

                        <p ALIGN="justify"><b>7.</b>Reducción del espacio de almacenamiento. La disminución de redundancias y la    aplicación de técnicas de compactación, provoca en los sistemas de BD una menor    ocupación de almacenamiento secundario.</p>

                       <hr>
                                       
                        <h5> <a href="#">Inconvenientes de los sistemas de BD</a></h5>
                        <!-- Post Content -->
                        <hr>
                        <p ALIGN="justify"><b>1.</b>Instalación costosa. La implantación de un sistema de BD puede llevar un costo elevado    tanto en equipo físico (nuevas instalaciones o ampliaciones), como en el lógico (sistemas operativos, programas, compiladores, etc.), además del costo de adquisición y mantenimiento del SGBD.</p>

                        <p ALIGN="justify"><b>2.</b>Personal especializado. Necesidad de contar con personal especializado para su  manipulación.</p>

                        <p ALIGN="justify"><b>3.</b>Implantación larga y difícil. Las dificultades que van apareciendo durante su desarrollo    llevan a que se rebasen los plazos inicialmente previstos.
                        </p>

                        <p ALIGN="justify"><b>4.</b>Falta de rentabilidad a corto plazo. El costo en personal y equipos, así como el tiempo que  tarda en estar en operación, hacen que no resulte rentable a corto plazo, sino a medio, o incluso, a largo plazo.</p>

                        <p ALIGN="justify"><b>5.</b>Escasa estandarización. La falta de estandarización al crear BD que facilite a los usuarios el manejo de estos sistemas, empieza ya a corregirse al ir apareciendo estándares, sobre todo para BD relacionales y BD orientadas al objeto.</p>

                        <p ALIGN="justify"><b>6.</b>Desfase entre teoría y práctica. Varios aspectos de los SGBD son todavía sólo teóricos, ya que se ha generado más fundamento teórico que práctico.</p>

                        <p ALIGN="justify"><b>Equivalencia entre la terminología empleada para referirnos a tablas, archivos y el modelo relacional:</b>
                        </p>
                        <center>
                            <img class="img-fluid rounded" src="../images/tu1.png" alt="">
                        </center>
                        <hr>
                        <p ALIGN="justify">Las operaciones típicas que realiza un SGBD pueden resumirse en las que afectan la integridad de los datos (o a todos los registros de un determinado tipo) y las que tienen lugar sobre registros concretos.
                        </p>

                        <blockquote class="blockquote">
                            <p class="mb-0"><a href="">Funciones esenciales</a></p>
                            <footer class="blockquote-footer">Someone famous in
                                <cite title="Source Title">Source Title</cite>
                            </footer>
                        </blockquote>

                        <p align="justify"><b>1.Definición o descripción:</b> Permite al diseñador especificar los elementos de datos que la    integran, su estructura y las relaciones que existen entre ellos, las reglas de integridad    semántica, así como las características de tipo físico y las vistas lógicas de los usuarios.</p>



                        <p ALIGN="justify">Esta función es realizada por el lenguaje de descripción o definición de datos (LDD) propio de cada SGBD; suministra los medios para definir las tres estructuras de datos:  externa (estructura lógica del usuario), lógica global (esquema conceptual) e interna    (estructura física), especificando las características de los datos a cada uno de estos    niveles.
                        </p>

                        <p ALIGN="justify">Para el nivel interno, se ha de indicar el espacio (volúmenes, cilindros y pistas) reservado  para la base, la longitud de los campos, su modo de representación (decimal, alfanumérico, binario, etc.). Además se deben definir los caminos de acceso, como  punteros, índices, etc.</p>

                        <p ALIGN="justify">Para las estructuras externa y lógica global, debe proporcionar los instrumentos para la    definición de los objetos (entidades, tablas, tuplas, etc.), así como su identificación,  atributos de los mismos, interrelaciones entre ellos, autorizaciones de acceso, etc.</p>

                        <p ALIGN="justify"><b>2. Manipulación:</b> Después de describir la BD, hay que introducir los datos en las estructuras    creadas. Los usuarios tendrán necesidad de:</p>
                        
                          <p ALIGN="justify"><b>•Consulta</b></p>
                          
                          <p ALIGN="justify">Totalidad de los datos: se recuperan todos los datos de la BD o todos los de un  determinado tipo.</p>
                          
                          <p ALIGN="justify">Consulta selectiva: localización de registros que cumplan con determinada condición (criterio de selección).</p>
                          
                          <p ALIGN="justify"><b>•Actualización</b></p>
                          
                           <p ALIGN="justify"><b>1.Inserción:</b> cuando aparezcan nuevos elementos.</p>
                            <p ALIGN="justify"><b>2. 	Borrado: </b>cuando haya que quitar ciertos elementos.</p>
                             <p ALIGN="justify"><b>3.Modificación: </b>cambios en algunos registros.</p>
                             
                              <p ALIGN="justify">La función de manipulación se llevará a cabo por medio del lenguaje de manipulación de datos (LMD).</p>
                              
                               <p ALIGN="justify">Control: Reúne todas las interfaces que necesitan los diferentes usuarios para    comunicarse con la base y proporciona un conjunto de procedimientos que facilitan la tarea del administrador. </p>
                               
                                <p ALIGN="justify">En la mayoría de los SGBD existen funciones de servicio, como cambiar la capacidad de los archivos, obtener estadísticas de utilización, cargar archivos y principalmente las relacionadas con la seguridad física (copias de seguridad, rearranque en caso de caída del sistema, etc.) y de protección frente a accesos no autorizados..</p>
                                
                                 <p ALIGN="justify"><b>DESCRIPCIÓN</b></p>
                                 <p ALIGN="justify"> Permite describir: </p>
                                 
                              <p ALIGN="justify"><b>•Su estructura</b> </p>
                            <p ALIGN="justify"><b>•Sus interrelaciones</b></p>
                             <p ALIGN="justify"><b> •Sus validaciones</b></p>
                             
                             <p ALIGN="justify"> A tres niveles:</p>
                             
                              <p ALIGN="justify"><b>•	Externo</b> </p>
                            <p ALIGN="justify"><b>•	Lógico Global</b></p>
                             <p ALIGN="justify"><b>•	Interno</b></p>
                              <p ALIGN="justify">Mediante un LDD</p>
                              
                              <p ALIGN="justify"><b>MANIPULACIÓN</b></p>
                              
                               <p ALIGN="justify">Permite sobre los datos de la base:</p>
                             
                              <p ALIGN="justify"><b>•	Buscar</b> </p>
                            <p ALIGN="justify"><b>•	Añadir</b></p>
                             <p ALIGN="justify"><b>•	Suprimir</b></p>
                               <p ALIGN="justify"><b>•	Modificar</b></p>
                              <p ALIGN="justify">Mediante un LMD</p>
                              
                              <p ALIGN="justify"> Lo cual supone:</p>
                             
                              <p ALIGN="justify"><b>•	Definir un criterio de selección (responsabilidad del usuario).</b> </p>
                            <p ALIGN="justify"><b>•	Lógico Global</b></p>
                             <p ALIGN="justify"><b>•	Definir la estructura externa a recuperar (responsabilidad del usuario).</b></p>
                              <p ALIGN="justify">•	Acceder a la estructura física (responsabilidad del sistema).</p>
                              
                              <p ALIGN="justify"><b>CONTROL</b></p>
                               <p ALIGN="justify"><b>•	Reúne las interfaces de los usuarios.</b> </p>
                            <p ALIGN="justify"><b>•	Suministra procedimientos para el administrador.</b></p>

                                       

                        <!-- Comments Form -->
                        <div class="card my-4">
                            <h5 class="card-header">
        <button id='1' class='previous btn btn-success' type='button'>
            <span class="fa fa-arrow-circle-left"></span><a href="unidad1-1.php"> Anterior</a> </button> Leave a Comment:<button  class='next btn btn-success chevron-right' type='button'> <a href="unidad1-3.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                        <!-- Single Comment -->
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>

                        <!-- Comment with nested comments -->
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Commenter Name</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                                <div class="media mt-4">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                    <div class="media-body">
                                        <h5 class="mt-0">Commenter Name</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>

                                <div class="media mt-4">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                    <div class="media-body">
                                        <h5 class="mt-0">Commenter Name</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    

                    <!-- Sidebar Widgets Column -->
                    <div class="col-md-4">

                        <!-- Search Widget -->
                        <div class="card my-4">
                            <h5 class="card-header">Search</h5>
                            <div class="card-body">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="card my-4">
                            <h5 class="card-header">Categories</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a href="#">Web Design</a>
                                            </li>
                                            <li>
                                                <a href="#">HTML</a>
                                            </li>
                                            <li>
                                                <a href="#">Freebies</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a href="#">JavaScript</a>
                                            </li>
                                            <li>
                                                <a href="#">CSS</a>
                                            </li>
                                            <li>
                                                <a href="#">Tutorials</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Side Widget -->
                        <div class="card my-4">
                            <h5 class="card-header">Side Widget</h5>
                            <div class="card-body">
                                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.row -->

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
                            <a class="btn btn-primary" href="../../index.php">Salir</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="../../vendor/jquery/jquery.min.js"></script>
            <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="../../vendor/chart.js/Chart.min.js"></script>
            <script src="../../vendor/datatables/jquery.dataTables.js"></script>
            <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../../js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="../../js/sb-admin-datatables.min.js"></script>
            <script src="../../js/sb-admin-charts.min.js"></script>
        </div>
</body>

</html>
<?php
     }
     else{
        echo '<script> alert("No Tienes los permisos para acceder a esta pagina.");</script>';
         echo '<script> window.location="../login.php"; </script>';
     }
}else{
 echo '<script> window.location="../login.php"; </script>';
}
?>
