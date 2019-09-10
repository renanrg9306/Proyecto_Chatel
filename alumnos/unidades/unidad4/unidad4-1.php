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
                        <span class="nav-link-text">Unidad IV:</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseAlumnos">
                        <li>
                            <a href="index.html">4.1 Definición de Algebra relacional. </a>
                        </li>
                        <li>
                            <a href="index.html">4.2 Definición del lenguaje de consulta (Secuency Query Language) SQL.</a>
                        </li>
                        <li>
                            <a href="index.html">4.3 Definición de datos.</a>

                        </li>
                        <li>
                            <a href="index.html">4.4 Manipulación de datos.</a>

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
                <li class="breadcrumb-item active">UNIDAD IV: LENGUAJE DE CONSULTA EN TRANSACT SQL. </li>
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
                        <h1 class="mt-4">UNIDAD IV.</h1>

                        <!-- Author -->
                        <p class="lead">

                            <a href="#">LENGUAJE DE CONSULTA EN TRANSACT SQL. </a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p>Posted on January 1, 2018 at 12:00 PM</p>

                        <hr>
                        <h5> <a href="#"><b>4.1 Definición de Algebra relacional.</b></a></h5>
                        <!-- Post Content -->

                        <ul>
                            <li class="lead" ALIGN="justify">Es un lenguaje de consulta procedimental</li>
                            <li class="lead" ALIGN="justify">Está constituida de una serie de operadores de alto nivel que se aplican a
                                las relaciones de bases de datos.</li>
                            <li class="lead" ALIGN="justify">Cada operador toma una o dos relaciones como su entrada y produce una
                                nueva relación como su salida.</li>
                            <li class="lead" ALIGN="justify">Una consulta de usuario que se hace por medio de un lenguaje de este tipo,
                                se interpreta como una expresión algebraica constituida por relaciones de
                                base, vistas y operadores.</li>
                            <li class="lead" ALIGN="justify">El resultado de cada una de las operaciones es otra relación</li>
                            <li class="lead" ALIGN="justify"> Es posible escribir expresiones relacionales anidadas.</li>
                        </ul>
                        <hr>
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/oa.PNG" alt="">
                        </center>
                        <hr>

                        <hr>
                        <h5> <a href="#"><b>OPERADORES CONJUNTISTAS</b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Sean las relaciones de grado n :</p>

                        <ul>
                            <li>R(A1, A2, ... , An) y S(B1, B2, ... , Bn)</li>
                        </ul>

                        <p class="lead" ALIGN="justify">Donde los atributos Ai y Bi, i &#8746; {1, ... ,n}, se definen sobre los mismos
                            dominios y el mismo número de atributos. Entonces, los operadores de
                            unión, intersección y diferencia, se definen según la teoría de conjuntos.</p>

                        <hr>
                        <h5> <a href="#"><b><u>UNION</u></b></a></h5>
                        <!-- Post Content -->
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/u.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify">La operación tiene como propósito tomar dos relaciones y unificarlas en una
                            relación más amplia.</p>

                        <p class="lead" ALIGN="justify"><b>Construye una relación con el mismo encabezado de R y S, formada por todas
                                las tuplas (registros) que aparecen en cualquiera de las dos relaciones
                                especificadas.</b></p>

                        <hr>
                        <h5> <a href="#"><b>Ejemplo:</b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Sean las dos relaciones que representan los estudiantes
                            matriculados en actividades culturales o deportivas de una Universidad.</p>

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/er1.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Entonces (DEPORTIVA &Uacute; CULTURAL) es la relación formada por todos los
                                estudiantes matriculados en actividades deportivas o en actividades culturales.</b></p>

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/duc.PNG" alt="">
                        </center>
                        <hr>

                        <h5> <a href="#"><b><u>INTERSECCION</u></b></a></h5>
                        <!-- Post Content -->
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/int.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Construye una relación con el mismo encabezado de R y S, formada por todas las
                                tuplas (registros) que aparezcan en las dos relaciones especificadas.</b></p>

                        <p class="lead" ALIGN="justify"><b>Cualquier expresión del álgebra relacional que use la intersección de conjuntos
                                puede reescribirse sustituyendo la operación intersección por un par de operaciones
                                diferencia de conjuntos, R &#8745; S = R - (R - S).</b></p>

                        <h5> <a href="#"><b>Ejemplo:</b></a></h5>

                        <p class="lead" ALIGN="justify"><b>Entonces (DEPORTIVA &#8745; CULTURAL) es la relación formada por
                                todos los estudiantes matriculados en actividades deportivas y en actividades
                                culturales.</b></p>


                        <center>
                            <img class="img-fluid rounded" src="../images/inter.PNG" alt="">
                        </center>
                        <hr>


                        <h5> <a href="#"><b><u>DIFERENCIA</u></b></a></h5>
                        <!-- Post Content -->
                        <center>
                            <img class="img-fluid rounded" src="../images/dif.PNG" alt="">
                        </center>
                        <hr>
                        <p class="#" ALIGN="justify">La operación diferencia, representada por (-), nos permite encontrar tuplas que estén
                            en una relación pero no en otra. La expresión R - S da como resultado una relación (con el mismo encabezado de R y S) que contienen aquellas tuplas que están en R pero no en S.</p>

                        <h5> <a href="#"><b>Ejemplo:</b></a></h5>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify">Entonces (DEPORTIVA - CULTURAL) es la relación formada por
                            todos los estudiantes matriculados en actividades deportivas y que no están
                            matriculados en actividades culturales.</p>
                        <center>
                            <img class="img-fluid rounded" src="../images/d-c.PNG" alt="">
                        </center>
                        <hr>
                        <p class="lead" ALIGN="justify">Otro operador conjuntista es el producto cartesiano en donde los atributos de las
                            relaciones involucradas pueden definirse sobre cualquier dominio, y su definición es
                            la siguiente:</p>

                        <h5> <a href="#"><b><u>PRODUCTO CARTESIANO</u></b></a></h5>
                        <!-- Post Content -->

                        <center>
                            <img class="img-fluid rounded" src="../images/pc.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>En matemáticas, el producto cartesiano de dos conjuntos es el conjunto de todos los
                                pares ordenados de elementos, tales que el primer elemento de cada par pertenece al
                                primer conjunto y el segundo elemento de cada par pertenece al segundo conjunto.
                                Por tanto, el producto cartesiano de dos relaciones será un conjunto ordenado de
                                pares de tuplas, dado las dos tuplas:</b></p>


                        <center>
                            <img class="img-fluid rounded" src="../images/pc1.PNG" alt="">
                        </center>

                        <p class="lead" ALIGN="justify">Formaran el registro :</p>
                        <center>
                            <img class="img-fluid rounded" src="../images/pc2.PNG" alt="">
                        </center>
                        <hr>
                        <p class="lead" ALIGN="justify">Dos relaciones A y B, son compatibles para el producto cartesiano, si y solo si, sus encabezados no tienen nombres de atributos comunes, si los hay deben renombrarse.</p>

                        <p class="lead" ALIGN="justify">“Por tanto, se define el producto cartesiano de dos relaciones compatibles para el
                            producto cartesiano, A x B, como una relación con encabezado consistente en la
                            concatenación de los encabezados de A y B, cuyo cuerpo consiste del conjunto de
                            todos los tuplos t tales que t es la concatenación de un tuplo a perteneciente a A y un
                            tuplo b perteneciente a B.”</p>

                        <h5> <a href="#"><b>Ejemplo:</b></a></h5>
                        <!-- Post Content -->
                        <ol>
                            <li>
                                <center>
                                    <img class="img-fluid rounded" src="../images/e1.PNG" alt="">
                                </center>
                                <hr>
                            </li>

                            <li>
                                <p class="lead" ALIGN="justify">En el ejemplo planteado inicialmente, el producto cartesiano nos dará todas las
                                    posibles combinaciones de tuplas de las dos relaciones.</p>
                            </li>

                        </ol>

                        <center>
                            <img class="img-fluid rounded" src="../images/e2.PNG" alt="">
                        </center>
                        <hr>

                        <h4> <a href="#"><b><u>PROPIEDADES</u></b></a></h4>
                        <!-- Post Content -->
                        <hr>

                        <h5> <a href="#"><b>Asociatividad</b></a></h5>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify"><b>La operación UNION es asociativa. Si A, B y C, son relaciones, entonces:</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/as1.PNG" alt="">
                        </center>
                        <p class="#" ALIGN="justify"><b>Análogamente, esto es aplicable a la INTERSECCION y al PRODUCTO.</b></p>
                        <center>
                            <img class="img-fluid rounded" src="../images/as2.PNG" alt="">
                        </center>

                        <h5> <a href="#"><b>Conmutatividad</b></a></h5>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify"><b>Las operaciones anteriores además son conmutativas:</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/Co1.PNG" alt="">
                        </center>

                        <h4> <a href="#"><b><u>OPERADORES UNARIOS</u></b></a></h4>
                        <!-- Post Content -->
                        <hr>

                        <h5> <a href="#"><b>PROYECCION (&#928;)</b></a></h5>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify"><b>La proyección es el proceso de elaboración de pequeñas relaciones, eligiendo sólo
                                los atributos especificados. En otras palabras la proyección es la extracción de ciertas
                                columnas a partir de una tabla relacional, eliminando las tuplas duplicadas.</b></p>


                        <p class="lead" ALIGN="justify"><b>Sea R(A1, A2, ... ,An) una relación, t una tupla de R y X un subconjunto de atributos
                                de R.</b></p>

                        <p class="lead" ALIGN="justify"><b>Se denomina tupla proyectada a X, como el registro resultante al eliminar los
                                valores cuyos atributos no se encuentran en X y se denota por: t[X].</b></p>

                        <p class="lead" ALIGN="justify"><b>La proyección de la relación R sobre X se denota por:</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/p1.PNG" alt="">
                        </center>

                        <p class="lead" ALIGN="justify"><b>Para lo cual, se debe considerar lo siguiente:</b></p>

                        <ul>
                            <li>La proyección se representa con &#928; (pi).</li>
                            <li>Se aplica sobre una sola relación a la vez.</li>
                            <li class="#" ALIGN="justify">Permite una descomposición de tipo vertical de la relación involucrada (es decir,
                                devuelve el subconjunto obtenido al proyectar los atributos especificados, en el
                                orden especificado de izquierda a derecha, eliminando luego los tuplos duplicados
                                en la relación resultante).</li>
                            <li>Ningún atributo se puede especificar más de una vez en una operación de
                                proyección.</li>
                            <li>Si se omite la lista de atributos se asume que contiene todos los atributos de la
                                relación dada.</li>
                        </ul>


                        <h5> <a href="#"><b>Ejemplo : Obtener &#928; Número, Nombre, Teléfono (DEPORTIVA)</b></a></h5>

                        <center>
                            <img class="img-fluid rounded" src="../images/pj1.PNG" alt="">
                        </center>
                        <hr>

                        <h4> <a href="#"><b><u>OPERADORES BINARIOS</u></b></a></h4>
                        <!-- Post Content -->
                        <hr>

                        <h5> <a href="#"><b>JOIN - &#8854;</b></a></h5>
                        <!-- Post Content -->


                        <p class="lead" ALIGN="justify"><b>Es el operador más importante del algebra relacional, cuyo papel primordial es
                                fusionar en una sola relación, dos relaciones que tengan al menos un atributo en
                                común.</b></p>

                        <p class="lead" ALIGN="justify"><b>El Join de dos relaciones A y B opera de la siguiente forma:</b></p>

                        <ol>
                            <li>Forma el producto cartesiano de A y B.</li>
                            <li>Hace una selección para eliminar algunas tuplas (los criterios para la selección se
                                especifican como parte del Join).</li>

                        </ol>

                        <h5> <a href="#"><b>Ejemplo:</b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify"><b>Considerando las siguientes relaciones, se quiere reunir la información de
                                ambas relaciones donde el Cod_Prop de Propietario sea igual al
                                Cod_Prop de Vehiculo.</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/pyv.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Para ello, necesitamos hacer un JOIN de la tabla PROPIETARIO, con la tabla
                                VEHICULO basados en los atributos Cod_Prop de ambas tablas (los cuales están
                                definidos sobre el mismo dominio y que por lo tanto son compatibles para el JOIN).</b></p>

                        <hr>
                        <h5> <a href="#"><b>Se denota por:</b></a></h5>
                        <!-- Post Content -->
                        
                        <p class="lead" ALIGN="justify"><b>PROPIETARIO JOIN (Cod_Prop = Cod_Prop) VEHICULO</b></p>
                                
                                  <center>
                            <img class="img-fluid rounded" src="../images/d1.PNG" alt="">
                        </center>
                        <hr>
                         
                    



                        <!-- Comments Form -->
                        <div class="card my-4">

                            <h5 class="card-header"> <button id='1' class='previous btn btn-success' type='button'>
                                    <span class="fa fa-arrow-circle-left"></span><a href="../unidad3/unidad3-2.php"> Anterior</a> </button>Leave a Comment: <button class='next btn btn-success chevron-right' type='button'> <a href="unidad4-2.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
