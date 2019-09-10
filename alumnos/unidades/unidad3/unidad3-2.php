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
                        <span class="nav-link-text">Unidad III:</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseAlumnos">
                        <li>
                            <a href="index.html">3.1 Definición de la Dependencias funcionales. </a>
                        </li>
                        <li>
                            <a href="index.html">3.2 Formas normales 1, 2, 3, FNBC,4 y 5FN.</a>
                        </li>
                        <li>
                            <a href="index.html">3.3 Proceso de normalización.</a>

                        </li>
                        <li>
                            <a href="index.html">3.4 Diseño del Modelo Relacional.</a>

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
                <li class="breadcrumb-item active">UNIDAD III: MODELO RELACIONAL </li>
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
                        <h1 class="mt-4">UNIDAD III.</h1>

                        <!-- Author -->
                        <p class="lead">

                            <a href="#">Dependencia Funcional y Normalización</a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p>Posted on January 1, 2018 at 12:00 PM</p>

                        <hr>
                        <h5> <a href="#"><b>3.3 Proceso de normalización.</b></a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p class="lead" ALIGN="justify">Uno de los factores mas importantes en la creación de páginas web dinámicas es el diseño de las Bases de Datos (BD). Si tus tablas no estan correctamente diseñadas, te
                            pueden causar un montón de dolores de cabeza cuando tengas de realizar
                            complicadísimas llamadas SQL en el código PHP para extraer los datos que necesitas.
                            Si conoces como establecer las relaciones entre los datos y la normalización de estos,
                            estarás preparado para comenzar a desarrollar tu aplicación en PHP.</p>

                        <p class="lead" ALIGN="justify">Si trabajas con MySQL o con Oracle, debes conocer los métodos de normalización del diseño de las tablas en tu sistema de BD relacional. Estos métodos pueden ayudarte a
                            hacer tu código PHP mas fácil de comprender, ampliar, y en determinados casos,
                            incluso hacer tu aplicación mas rápida.</p>

                        <p class="lead" ALIGN="justify">Básicamente, las reglas de Normalización están encaminadas a eliminar redundancias e inconsistencias de dependencia en el diseño de las tablas. Más tarde explicaré lo que
                            esto significa mientras vemos los cinco pasos progresivos para normalizar, tienes que
                            tener en cuenta que debes crear una BD funcional y eficiente. Tambien detallaré los
                            tipos de relaciones que tu estructura de datos puede tener.</p>

                        <p class="lead" ALIGN="justify"><b>Digamos que queremos crear una tabla con la información de usuarios, y los datos a guardar son el nombre, la empresa, la dirección de la empresa y algun e-mail, o bien
                                URL si las tienen. En principio comenzarias definiendo la estructura de una tabla como
                                esta:</b></p>

                        <hr>
                        <h5> <a href="#"><b>Formalización CERO</b></a></h5>
                        <!-- Post Content -->

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/f0.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Diríamos que la anterior tabla esta en nivel de Formalizacion Cero porque ninguna de nuestras reglas de normalización ha sido aplicada. Observa los campos url1 y url2 --
                                ¿Qué haremos cuando en nuestra aplicación necesitemos una tercera url ? ¿ Quieres
                                tener que añadir otro campo/columna a tu tabla y tener que reprogramar toda la entrada
                                de datos de tu código PHP ? Obviamente no, tu quieres crear un sistema funcional que
                                pueda crecer y adaptarse fácilmente a los nuevos requisitos. Hechemos un vistazo a las
                                reglas del Primer Nivel de Formalización-Normalización, y las aplicaremos a nuestra
                                tabla.</b></p>


                        <h5> <a href="#"><b>Primer nivel de Formalización/Normalización. (F/N)</b></a></h5>
                        <!-- Post Content -->

                        <ol>
                            <li>Eliminar los grupos repetitivos de la tablas individuales.</li>
                            <li>Crear una tabla separada por cada grupo de datos relacionados.</li>
                            <li>Identificar cada grupo de datos relacionados con una clave primaria.</li>
                        </ol>

                        <p class="lead" ALIGN="justify"><b>¿ Ves que estamos rompiendo la primera regla cuando repetimos los campos
                                url1 y url2 ? ¿ Y que pasa con la tercera regla, la clave primaria ? La regla tres
                                básicamente significa que tenemos que poner una campo tipo contador
                                autoincrementable para cada registro. De otra forma, ¿ Qué pasaria si tuvieramos
                                dos usuarios llamados Joe y queremos diferenciarlos. Una vez que aplicaramos
                                el primer nivel de F/N nos encontrariamos con la siguiente tabla:</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/f1.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Ahora diremos que nuestra tabla está en el primer nivel de F/N. Hemos
                                solucionado el problema de la limitación del campo url. Pero sin embargo vemos
                                otros problemas....Cada vez que introducimos un nuevo registro en la tabla
                                usuarios, tenemos que duplicar el nombre de la empresa y del usuario. No sólo
                                nuestra BD crecerá muchísimo, sino que será muy facil que la BD se corrompa
                                si escribimos mal alguno de los datos redundantes. Aplicaremos pues el segundo
                                nivel de F/N:</b></p>

                        <h5> <a href="#"><b>Segundo nivel de F/N</b></a></h5>
                        <!-- Post Content -->
                        <ol>
                            <li>Crear tablas separadas para aquellos grupos de datos que se aplican a varios
                                registros.</li>
                            <li>Relacionar estas tablas mediante una clave externa.</li>
                        </ol>


                        <p class="#" ALIGN="justify"><b>Hemos separado el campo url en otra tabla, de forma que podemos añadir más
                                en el futuro si tener que duplicar los demás datos. Tambien vamos a usar
                                nuestra clave primaria para relacionar estos campos:</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/f2.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Vale, hemos creado tablas separadas y la clave primaria en la tabla usuarios,
                                userId, esta relacionada ahora con la clave externa en la tabla urls, relUserId.
                                Esto esta mejor. ¿ Pero que ocurre cuando queremos añadir otro empleado a la
                                empresa ABC ? ¿ o 200 empleados ? Ahora tenemos el nombre de la empresa y
                                su dirección duplicandose, otra situación que puede inducirnos a introducir
                                errores en nuestros datos. Así que tendrémos que aplicar el tercer nivel de F/N:</b></p>


                        <h5> <a href="#"><b>Tercer nivel de F/N.</b></a></h5>
                        <!-- Post Content -->
                        <ol>
                            <li>Eliminar aquellos campos que no dependan de la clave.</li>

                        </ol>
                        <p class="#" ALIGN="justify"><b>Nuestro nombre de empresa y su dirección no tienen nada que ver con el campo
                                userId, asi que tienen que tener su propio empresaId:</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/f3.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Ahora tenemos la clave primaria emprId en la tabla empresas relacionada con
                                la clave externa recEmpresaId en la tabla usuarios, y podemos añadir 200
                                usuarios mientras que sólo tenemos que insertar el nombre 'ABC' una vez.</b></p>

                        <p class="lead" ALIGN="justify"><b>Nuestras tablas de usuarios y urls pueden crecer todo lo que quieran sin
                                duplicación ni corrupción de datos. La mayoria de los desarrolladores dicen que
                                el tercer nivel de F/N es suficiente, que nuestro esquema de datos puede manejar
                                facilmente los datos obtenidos de una cualquier empresa en su totalidad, y en la
                                mayoria de los casos esto será cierto.</b></p>

                        <p class="lead" ALIGN="justify"><b>Pero hechemos un vistazo a nuestro campo urls - ¿ Ves duplicación de datos ?
                                Esto es perfectamente aceptable si la entrada de datos de este campo es
                                solicitada al usuario en nuestra apliación para que teclee libremente su url, y por
                                lo tanto es sólo una coincidencia que Joe y Jill teclearon la misma url. ¿ Pero que
                                pasa si en lugar de entrada libre de texto usáramos un menú desplegable con 20
                                o incluso más urls predefinidas ? Entonces tendríamos que llevar nuestro diseño
                                de BD al siguiente nivel de F/N, el cuarto, muchos desarrolladores lo pasan por
                                alto porque depende mucho de un tipo muy específico de relación, la relación
                                'varios-con-varios', la cual aún no hemos encontrado en nuestra aplicación.</b></p>

                        <h5> <a href="#"><b>Relaciones entre los Datos</b></a></h5>

                        <p class="lead" ALIGN="justify"><b>Antes de definir el cuarto nivel de F/N, veremos tres tipos de relaciones entre
                                los datos: uno-a-uno, uno-con-varios y varios-con-varios. Mira la tabla usuarios
                                en el Primer Nivel de F/N del ejemplo de arriba. Por un momento imaginámos
                                que ponemos el campo url en una tabla separada, y cada vez que introducimos
                                un registro en la tabla usuarios tambien introducimos una sola fila en la tabla
                                urls. Entonces tendríamos una relacion uno-a-uno: cada fila en la tabla usuarios
                                tendría exactamente una fila correspondiente en la tabla urls. Para los
                                propósitos de nuestra aplicación no sería útil la normalización.</b></p>

                        <p class="lead" ALIGN="justify"><b>Ahora mira las tablas en el ejemplo del Segundo Nivel de F/N. Nuestras tablas
                                permiten a un sólo usuario tener asociadas varias urls. Esta es una relación unocon-varios, el tipo de relación más común, y hasta que se nos presentó el dilema del Tercer Nivel de F/N. la única clase de relación que necesitamos.</b></p>

                        <p class="lead" ALIGN="justify"><b>La relación varios-con-varios, sin embargo, es ligeramente más compleja.
                                Observa en nuestro ejemplo del Tercer Nivel de F/N que tenemos a un usuario
                                relacionado con varias urls. Como dijímos, vamos a cambiar la estructura para
                                permitir que varios usuarios esten relacionados con varias urls y así tendremos
                                una relación varios-con-varios. Veamos como quedarían nuestras tablas antes de
                                seguir con este planteamiento:</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/rd.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Para disminuir la duplicación de los datos ( este proceso nos llevará al Cuarto
                                Nivel de F/N), hemos creado una tabla que sólo tiene claves externas y primarias
                                url_relations. Hemos sido capaces de remover la entradas duplicadas en la tabla
                                urls creando la tabla url_relations. Ahora podemos expresar fielmente la relación
                                que ambos Joe and Jill tienen entre cada uno de ellos, y entre ambos, las urls.
                                Así que veamos exáctamente que es lo que el Cuarto Nivel de F/N. supone:</b></p>

                        <hr>
                        <h5> <a href="#"><b>Cuarto Nivel de F/N.</b></a></h5>
                        <!-- Post Content -->
                        <ol>
                            <li>En las relaciones varios-con-varios, entidades independientes no pueden ser
                                almacenadas en la misma tabla.</li>
                        </ol>

                        <p class="lead" ALIGN="justify">Ya que sólo se aplica a las relaciones varios-con-varios, la mayoria de los
                            desarrolladores pueden ignorar esta regla de forma correcta. Pero es muy útil en ciertas
                            situaciones, tal como esta. Hemos optimizado nuestra tabla urls eliminado duplicados y
                            hemos puesto las relaciones en su propia tabla.</p>

                        <p class="lead" ALIGN="justify">Os voy a poner un ejemplo prático, ahora podemos seleccionar todas las urls de Joe realizando la siguiente instrucción SQL:</p>
                        <hr>
                        <h5> <a href="#"><b>SELECT nombre, url FROM usuarios, urls, url_relations WHERE
                                    url_relations.relatedUserId = 1 AND usuarios.userId = 1 AND urls.urlId =
                                    url_relations.relatedUrlId</b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Y si queremos recorrer todas las urls de cada uno de los usuarios, hariamos algo así:</p>

                        <h5> <a href="#"><b>SELECT nombre, url FROM usuarios, urls, url_relations WHERE
                                    usuarios.userId = url_relations.relatedUserId AND urls.urlId =
                                    url_relations.relatedUrlId</b></a></h5>

                        <hr>
                        <h5> <a href="#"><b>Quinto Nivel de F/N.</b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Existe otro nivel de normalización que se aplica a veces, pero es de hecho algo esotérico y en la mayoria de los casos no es necesario para obtener la mejor funcionalidad de
                            nuestra estructura de datos o aplicación. Su principio sugiere:</p>

                        <ol>
                            <li>La tabla original debe ser reconstruida desde las tablas resultantes en las cuales a
                                sido troceada.</li>
                        </ol>

                        <p class="lead" ALIGN="justify">Los beneficios de aplicar esta regla aseguran que no has creado ninguna columna
                            extraña en tus tablas y que la estructura de las tablas que has creado sea del tamaño
                            justo que tiene que ser. Es una buena práctica aplicar este regla, pero a no ser que estes
                            tratando con una extensa estructura de datos probablemente no la necesitarás.</p>

                       

                        <!-- Comments Form -->
                        <div class="card my-4">

                            <h5 class="card-header"> <button id='1' class='previous btn btn-success' type='button'>
                                    <span class="fa fa-arrow-circle-left"></span><a href="unidad3-1.php"> Anterior</a> </button>Leave a Comment: <button class='next btn btn-success chevron-right' type='button'> <a href="../unidad4/unidad4-1.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
