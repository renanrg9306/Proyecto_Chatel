<?php 
session_start();  
include '../../../admin/conex.php';
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

    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/estilo.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../images/u.png" type="image/x-icon">


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
        <img src="../../../images/uni1.gif" width="30" class="d-inline-block alingn-top" alt="Logo UNI">
        <a class="navbar-brand" href="../../index.php">Bases de Datos</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumnos">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAlumnos" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-wrench"></i>
                        <span class="nav-link-text">Unidad V:</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseAlumnos">
                        <li>
                            <a href="index.html">5.1 Introducción a las bases de datos cliente servidor. </a>
                        </li>
                        <li>
                            <a href="index.html">5.2 Características la arquitectura cliente servidor.</a>
                        </li>
                        <li>
                            <a href="index.html">5.3 Ventajas y desventajas de las arquitectura cliente servidor.</a>

                        </li>
                        <li>
                            <a href="index.html">5.4 Introducción a las bases de datos distribuidas.</a>

                        </li>

                        <li>
                            <a href="index.html">5.5 Técnicas de distribución de datos.</a>

                        </li>
                        <li>
                            <a href="index.html">5.6 Ventajas y desventajas de las bases de datos distribuidas.

                            </a>

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
                    <a href="../../estudiantes.php">Alumnos</a>
                </li>
                <li class="breadcrumb-item active">UNIDAD V: BASES DE DATOS CLIENTE SERVIDOR Y DISTRIBUIDA </li>
            </ol>
        </div>

        <!--************boton de atras y adelante*****************-->


        <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
        <div class="w3-main" style="margin-left:auto">
            <!-- Page Content -->
            <div class="container">

                <div class="row">

                    <!-- Post Content Column -->
                    <div class="col-lg-8">

                        <!-- Title -->
                        <h1 class="mt-4">UNIDAD V.</h1>

                        <!-- Author -->
                        <p class="lead">

                            <a href="#">BASES DE DATOS CLIENTE SERVIDOR</a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p>Posted on January 1, 2018 at 12:00 PM</p>

                        <hr>
                        <h5> <a href="#"><b>Introducción</b></a></h5>
                        <!-- Post Content -->
                        <p class="lead" ALIGN="justify">En esta sección estudiaremos los sistemas de bases de datos desde una perspectiva ligeramente diferente. Desde luego, la finalidad
                            principal de dichos sistemas es apoyar el desarrollo y la ejecución de las aplicaciones de bases
                            de datos. Por lo tanto, desde un punto de vista más elevado, un sistema de base de datos puede ser
                            visto como un sistema que tiene una estructura muy sencilla de dos partes, las cuales consisten
                            en un servidor (también denominado parte dorsal o servicios de fondo) y un conjunto de
                            clientes (también llamados partes frontales, aplicaciones para el usuario o interfaces). </p>

                        <p class="lead" ALIGN="justify">Su funcionamiento es sencillo: se tiene una máquina cliente, que requiere un servicio de una máquina servidor, y éste realiza la función para la que está programado (nótese que no
                            tienen que tratarse de máquinas diferentes; es decir, una computadora por sí sola puede ser
                            ambos cliente y servidor dependiendo del software de configuración ).</p>

                        <p class="lead" ALIGN="justify">Desde el punto de vista funcional, se puede definir la computación Cliente/Servidor como una arquitectura distribuida que permite a los usuarios finales obtener acceso a la
                            información en forma transparente aún en entornos multiplataforma.</p>

                        <p class="lead" ALIGN="justify">En el modelo cliente servidor, el cliente envía un mensaje solicitando un
                            determinado servicio a un servidor (hace una petición), y este envía uno o varios mensajes
                            con la respuesta (provee el servicio). En un sistema distribuido cada
                            máquina puede cumplir el rol de servidor para algunas tareas y el rol de cliente para otras.</p>

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/cs2.png" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify">La idea es tratar a una computadora como un instrumento, que por sí sola pueda
                            realizar muchas tareas, pero con la consideración de que realice aquellas que son mas
                            adecuadas a sus características . Si esto se aplica tanto a clientes como servidores se
                            entiende que la forma más estándar de aplicación y uso de sistemas Cliente/Servidor es
                            mediante la explotación de las PC’s a través de interfaces gráficas de usuario; mientras que
                            la administración de datos y su seguridad e integridad se deja a cargo de computadoras
                            centrales tipo mainframe. Usualmente la mayoría del trabajo pesado se hace en el proceso
                            llamado servidor y el o los procesos cliente sólo se ocupan de la interacción con el usuario
                            (aunque esto puede variar). En otras palabras la arquitectura Cliente/Servidor es una
                            extensión de programación modular en la que la base fundamental es separar una gran pieza
                            de software en módulos con el fin de hacer más fácil el desarrollo y mejorar su
                            mantenimiento.</p>

                        <p class="lead" ALIGN="justify">Esta arquitectura permite distribuir físicamente los procesos y los datos en forma
                            más eficiente lo que en computación distribuida afecta directamente el tráfico de la red,
                            reduciéndolo grandemente.</p>


                        <hr>
                        <h5> <a href="#"><b>Cliente</b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">El cliente es el proceso que permite al usuario formular los requerimientos y pasarlos al servidor, se le conoce con el término front-end.</p>

                        <p class="lead" ALIGN="justify">El Cliente normalmente maneja todas las funciones relacionadas con la
                            manipulación y despliegue de datos, por lo que están desarrollados sobre plataformas que
                            permiten construir interfaces gráficas de usuario (GUI), además de acceder a los servicios
                            distribuidos en cualquier parte de una red.</p>

                        <p class="lead" ALIGN="justify">Las funciones que lleva a cabo el proceso cliente se resumen en los siguientes
                            puntos:</p>
                        <ul>
                            <li>Aceptar los requerimientos de bases de datos que hacen los clientes.</li>
                            <li>Procesar requerimientos de bases de datos.</li>
                            <li>Formatear datos para trasmitirlos a los clientes.</li>
                            <li>Procesar la lógica de la aplicación y realizar validaciones a nivel de bases de datos.</li>
                        </ul>
                        <hr>
                        <h5 class="#" ALIGN="justify"><b>Características de la arquitectura Cliente/Servidor</b></h5>

                        <p class="lead" ALIGN="justify">Las características básicas de una arquitectura Cliente/Servidor son</p>

                        <ul>
                            <li class="lead" ALIGN="justify">Combinación de un cliente que interactúa con el usuario, y un servidor que
                                interactúa con los recursos compartidos. El proceso del cliente proporciona la
                                interfaz entre el usuario y el resto del sistema. El proceso del servidor actúa como
                                un motor de software que maneja recursos compartidos tales como bases de datos,
                                impresoras, módems, etc.</li><br>
                            <li class="lead" ALIGN="justify">Las tareas del cliente y del servidor tienen diferentes requerimientos en cuanto a
                                recursos de cómputo como velocidad del procesador, memoria, velocidad y
                                capacidades del disco y input-output devices.</li><br>
                            <li class="lead" ALIGN="justify">Se establece una relación entre procesos distintos, los cuales pueden ser ejecutados
                                en la misma máquina o en máquinas diferentes distribuidas a lo largo de la red.</li><br>
                            <li class="lead" ALIGN="justify">Existe una clara distinción de funciones basada en el concepto de "servicio", que se
                                establece entre clientes y servidores.</li><br>
                            <li class="lead" ALIGN="justify">La relación establecida puede ser de muchos a uno, en la que un servidor puede dar
                                servicio a muchos clientes, regulando su acceso a recursos compartidos.</li><br>
                            <li class="lead" ALIGN="justify">Los clientes corresponden a procesos activos en cuanto a que son éstos los que
                                hacen peticiones de servicios a los servidores. Estos últimos tienen un carácter
                                pasivo ya que esperan las peticiones de los clientes.</li><br>
                            <li class="lead" ALIGN="justify">No existe otra relación entre clientes y servidores que no sea la que se establece a
                                través del intercambio de mensajes entre ambos. El mensaje es el mecanismo para la
                                petición y entrega de solicitudes de servicio.</li><br>
                            <li class="lead" ALIGN="justify">El ambiente es heterogéneo. La plataforma de hardware y el sistema operativo del
                                cliente y del servidor no son siempre la misma. Precisamente una de las principales
                                ventajas de esta arquitectura es la posibilidad de conectar clientes y servidores
                                independientemente de sus plataformas.</li><br>
                            <li class="lead" ALIGN="justify">El concepto de escalabilidad tanto horizontal como vertical es aplicable a cualquier
                                sistema Cliente/Servidor. La escalabilidad horizontal permite agregar más
                                estaciones de trabajo activas sin afectar significativamente el rendimiento. La
                                escalabilidad vertical permite mejorar las características del servidor o agregar
                                múltiples servidores.</li><br>
                        </ul>

                        <hr>
                        <h4> <a href="#"><b><u>Ventajas y desventajas del modelo cliente/servidor</u></b></a></h4>
                        <!-- Post Content -->

                        <hr>
                        <h5> <a href="#"><b>Ventajas:</b></a></h5>
                        <!-- Post Content -->

                        <ol>
                            <li class="lead" ALIGN="justify">Centralización del control de los recursos, datos y accesos.</li>
                            <li class="lead" ALIGN="justify">Facilidad de mantenimiento y actualización del lado del servidor: Esto es porque el lado del servidor se puede mantener o actualizar fácilmente. Por ejemplo, una actualización se aplica a un único servidor, pero los beneficios los obtienen múltiples clientes generalmente sin necesidad de que éstos actualicen nada.</li>
                            <li class="lead" ALIGN="justify">Toda la información es almacenada en el lado del servidor, que suele tener mayor seguridad que los clientes.
                            </li >
                            <li class="lead" ALIGN="justify">Hay muchas herramientas cliente-servidor probadas, seguras y amigables para usar.</li>
                        </ol>


                        <h5> <a href="#"><b>Desventajas:</b></a></h5>
                        <!-- Post Content -->

                        <ol>
                            <li class="lead" ALIGN="justify">Si el número de clientes simultáneos es elevado, el servidor puede saturarse. Esto sucede con menor frecuencia en las redes P2P.
                            </li>
                            <li class="lead" ALIGN="justify">Frente a fallas del lado del servidor, el servicio queda paralizado para los clientes. Algo que no sucede en una red P2P.
                            </li>

                        </ol>




                        <!-- Comments Form -->
                        <div class="card my-4">

                            <h5 class="card-header"> <button id='1' class='previous btn btn-success' type='button'>
                                    <span class="fa fa-arrow-circle-left"></span><a href="../unidad4/unidad4-2.php"> Anterior</a> </button>Leave a Comment: <button class='next btn btn-success chevron-right' type='button'> <a href="unidad5-2.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
            <script src="../../../vendor/jquery/jquery.min.js"></script>
            <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="../../../vendor/chart.js/Chart.min.js"></script>
            <script src="../../../vendor/datatables/jquery.dataTables.js"></script>
            <script src="../../../vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../../../js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="../../../js/sb-admin-datatables.min.js"></script>
            <script src="../../../js/sb-admin-charts.min.js"></script>
        </div>
</body>

</html>
<?php
     }
     else{
        echo '<script> alert("No Tienes los permisos para acceder a esta pagina.");</script>';
         echo '<script> window.location="../../login.php"; </script>';
     }
}else{
 echo '<script> window.location="../../login.php"; </script>';
}
?>
