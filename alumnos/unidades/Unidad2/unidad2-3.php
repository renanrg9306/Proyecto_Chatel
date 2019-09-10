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
                        <span class="nav-link-text">Unidad II:</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseAlumnos">
                        <li>
                            <a href="index.html">2.1 Definición de:
                                <br> Modelo Conceptual.
                                <br> Modelo Jerárquico.
                                <br> Modelo de Redes.
                            </a>
                        </li>
                        <li>
                            <a href="index.html">2.2 Modelo Entidad relación.</a>
                        </li>
                        <li>
                            <a href="index.html">2.3 Modelo de Objetos.</a>

                        </li>
                        <li>
                            <a href="index.html">2.4 Bases de datos relacionales.</a>

                        </li>
                        <li>
                            <a href="index.html"> 2.5 Elementos de las bases de datos relacionales:
                                <br> 2.5.1 Tuplas, tablas o entidades.
                                <br> 2.5.2 Atributos dominios.
                                <br> 2.5.3 Relaciones.
                                <br> 2.5.4 Cardinalidades de las relaciones.
                            </a>

                        </li>
                        <li>
                            <a href="index.html">2.6 Reglas de integridad.</a>

                        </li>
                        <li>
                            <a href="index.html">2.7 Pasos para pasar del modelo entidad relación al modelo relacional.</a>

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
                <li class="breadcrumb-item active">UNIDAD II: MODELO DE DATOS RELACIONAL</li>
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
                        <h1 class="mt-4">UNIDAD II.</h1>

                        <!-- Author -->
                        <p class="lead">

                            <a href="#">MODELO DE DATOS RELACIONAL</a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p>Posted on January 1, 2018 at 12:00 PM</p>

                        <hr>
                        <h5> <a href="#"><b>3.1 Conceptos Básicos</b></a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p class="lead" ALIGN="justify">El modelo entidad-relación es el modelo más utilizado para el diseño conceptual de bases de datos. Fue introducido por Peter Chan en 1976. El modelo entidad-relación está
                            formado por un conjunto de conceptos que permiten describir la realidad mediante un
                            conjunto de representaciones gráficas y lingüísticas.</p>

                        <p class="lead" ALIGN="justify">Conjunto de representaciones gráficas y lingüísticas.
                            Originalmente, el modelo entidad-relación sólo incluía los conceptos de entidad, relación
                            y atributo. Más tarde, se añadieron otros conceptos, como los atributos compuestos y las
                            jerarquías de generalización, en lo que se ha denominado modelo entidad-relación
                            extendido.</p>

                        <h5> <a href="#"><b><u>Entidad</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Cualquier tipo de objeto o concepto sobre el que se recoge información: cosa,
                            persona, concepto abstracto o suceso. Las entidades se representan gráficamente
                            mediante rectángulos y su nombre aparece en el interior. Un nombre de entidad sólo puede
                            aparecer una vez en el esquema conceptual. Hay dos tipos de entidades: fuertes y débiles.</p>

                        <ul>
                            <li><b><u>Entidad débil </u></b>es una entidad cuya existencia depende de la existencia de otra entidad,
                                es decir, aquella que no puede ser unívocamente identificada solamente por sus
                                atributos. Se representan mediante un doble rectángulo, es decir, un rectángulo con
                                doble línea.</li>
                            <li><b><u>Entidad fuerte</u></b> es una entidad que no es débil y no depende de la existencia de otra,
                                esta también es conocida como entidad regular es aquella que sí puede ser identificada
                                unívocamente. En los casos en que se requiera, se puede dar que una entidad fuerte
                                "preste" algunos de sus atributos a una entidad débil para que, esta última, se pueda
                                identificar.</li>
                        </ul>
                        <hr>

                        <h5> <a href="#"><b><u>Conjunto de entidades</u></b></a></h5>
                        <!-- Post Content -->


                        <p class="lead" ALIGN="justify">Es una colección de entidades que comparten los mismos atributos o
                            características.</p>
                        <hr>

                        <h5> <a href="#"><b><u>Relación (interrelación)</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Es una correspondencia o asociación entre dos o más entidades. Cada relación
                            tiene un nombre que describe su función. Las relaciones se representan gráficamente
                            mediante rombos y su nombre aparece en el interior.
                            Las entidades que están involucradas en una determinada relación se denominan
                            <b>entidades participantes</b>. El número de participantes en una relación es lo que se
                            denomina <b>grado de la relación</b>. Por lo tanto, una relación en la que participan dos
                            entidades es una <b>relación binaria</b>; si son tres las entidades participantes, se denomina
                            <b>relación ternaria</b>; etc. Una <b>relación recursiva</b> es donde la misma entidad participa más
                            de una vez en la relación con distintos papeles.</p>

                        <h5> <a href="#"><b><u>Conjunto de relaciones</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Consiste en una colección de relaciones de la misma naturaleza. La dependencia o
                            asociación entre los conjuntos de entidades es llamada participación. Se llama grado del
                            conjunto de relaciones a la cantidad de conjuntos de entidades participantes en la
                            relación.</p>
                        <hr>
                        <h5> <a href="#"><b><u>Atributo</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">
                            Los atributos representan las propiedades básicas de las entidades y de las
                            relaciones. Toda la información extensiva es portada por los atributos. Gráficamente, se
                            representan mediante bolitas que cuelgan de las entidades o relaciones a las que
                            pertenecen.</p>

                        <p class="lead" ALIGN="justify">Cada atributo tiene un conjunto de valores asociados denominado dominio. El
                            dominio define todos los valores posibles que puede tomar un atributo. Puede haber varios
                            atributos definidos sobre un mismo dominio.</p>

                        <p class="lead" ALIGN="justify">Los atributos pueden ser simples o compuestos. Un atributo simple tiene un solo
                            componente, que no se puede dividir en partes más pequeñas que tengan un significado
                            propio. Un atributo compuesto con varios componentes, cada uno con un significado por
                            sí mismo. Un grupo de atributos se representa mediante un atributo compuesto cuando
                            tienen afinidad en cuanto a su significado, o en cuanto a su uso. Un atributo compuesto se
                            representa gráficamente mediante un óvalo.</p>

                        <p class="lead" ALIGN="justify">Los atributos también pueden clasificarse en monovalentes o polivalentes. Un atributo monovalente es aquel que tiene un solo valor para cada ocurrencia de la entidad
                            o relación a la que pertenece. Un atributo polivalente es aquel que tiene varios valores
                            para cada ocurrencia de la entidad o relación a la que pertenece. A estos atributos también
                            se les denomina multivaluados, y pueden tener un número máximo y un número mínimo de
                            valores. Un atributo derivado es aquel que representa un valor que se puede obtener a
                            partir del valor de uno o varios atributos, que no necesariamente deben pertenecer a la
                            misma entidad o relación..</p>
                        <hr>

                        <h5> <a href="#"><b><u>Identificador</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">
                            Un identificador de una entidad es un atributo o conjunto de atributos que determina
                            de modo único cada ocurrencia de esa entidad. Un identificador de una entidad debe
                            cumplir dos condiciones:</p>
                        <ol>
                            <li>No pueden existir dos ocurrencias de la entidad con el mismo valor del identificador.</li>
                            <li>Si se omite cualquier atributo del identificador, la condición anterior deja de cumplirse.
                                Toda entidad tiene al menos un identificador y puede tener varios identificadores
                                alternativos. Las relaciones no tienen identificadores.</li>
                        </ol>

                        <h5> <a href="#"><b><u>Jerarquía de generalización</u></b></a></h5>
                        <!-- Post Content -->

                        <ol>
                            <li>Jerarquía es Total si cada ocurrencia de la entidad genérica corresponde al menos
                                con una ocurrencia de alguna subentidad.</li>
                            <li>Jerarquía Parcial si existe alguna ocurrencia de la entidad genérica que no
                                corresponde con ninguna ocurrencia de ninguna subentidad.</li>
                            <li>Jerarquía Exclusiva si cada ocurrencia de la entidad genérica corresponde, como
                                mucho, con una ocurrencia de una sola de las subentidades.</li>
                            <li>Jerarquía Superpuesta si existe alguna ocurrencia de la entidad genérica que
                                corresponde a ocurrencias de dos o más subentidades diferentes.</li>
                        </ol>

                        <p class="lead" ALIGN="justify">
                            Un subconjunto es un caso particular de generalización con una sola entidad como
                            subentidad. Un subconjunto siempre es una jerarquía parcial y exclusiva.</p>
                        <hr>

                        <h5> <a href="#"><b><u>Herencia:</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">

                            Es un intento de adaptación de estos diagramas al paradigma orientado a objetos.
                            La herencia es un tipo de relación entre una entidad "padre" y una entidad "hijo". La entidad
                            "hijo" hereda todos los atributos y relaciones de la entidad "padre". Por tanto, no necesitan
                            ser representadas dos veces en el diagrama. La relación de herencia se representa
                            mediante un triángulo interconectado por líneas a las entidades. La entidad conectada el vértice superior del triángulo es la entidad "padre". Solamente puede existir una entidad "padre" (herencia simple). Las entidades "hijo" se conectan por la base del triángulo.</p>

                        <h5> <a href="#"><b><u>Cardinalidad de las relaciones</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">
                            Se representa mediante una etiqueta en el exterior de la relación, respectivamente:
                            "1:1", "1:N" y "N:M", aunque la notación depende del lenguaje utilizado, la que más se usa
                            actualmente es el unificado. Otra forma de expresar la cardinalidad es situando un símbolo
                            cerca de la línea que conecta una entidad con una relación:</p>


                        <p ALIGN="justify">•"0" si cada instancia de la entidad no está obligada a participar en la relación.</p>
                        <p ALIGN="justify">•"1" si toda instancia de la entidad está obligada a participar en la relación y, además,
                            solamente participa una vez. </p>
                        <p ALIGN="justify"> •"N”, "M", ó "*" si cada instancia de la entidad no está obligada a participar en la
                            relación y puede hacerlo cualquier número de veces.</p>
                        <hr>

                        <h5> <a href="#"><b><u>Correspondencia de cardinalidades</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">
                            Dado un conjunto de relaciones en el que participan dos o más conjuntos de
                            entidades, la correspondencia de cardinalidad indica el número de entidades con las que
                            puede estar relacionada una entidad dada, la correspondencia de cardinalidades puede ser:</p>


                        <p ALIGN="justify"><b>•Uno a uno:</b> Una entidad de A se relaciona únicamente con una entidad en B y
                            viceversa.</p>
                        <p ALIGN="justify"><b>•Uno a varios:</b> Una entidad en A se relaciona con cero o muchas entidades en B.
                            Pero una entidad en B se relaciona con una única entidad en A.</p>
                        <p ALIGN="justify"><b>•Varios a uno:</b> Una entidad en A se relaciona exclusivamente con una entidad en B.
                            Pero una entidad en B se puede relacionar con 0 o muchas entidades en A.</p>
                        <p ALIGN="justify"><b>• Varios a varios:</b> Una entidad en A se puede relacionar con 0 o muchas entidades en
                            B y viceversa.</p>

                        <hr>


                        <h5> <a href="#"><b>Restricciones de participación</b></a></h5>
                        <!-- Post Content -->
                        <p ALIGN="justify"><b>Total: </b>Cuando cada entidad en A participa en al menos una relación de R.</p>
                        <p ALIGN="justify"><b>• Parcial: </b> Cuando al menos una entidad en A NO participa en alguna relación de R.</p>
                        <hr>

                        <h5> <a href="#"><b><u>Claves</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">
                            Es un subconjunto del conjunto de atributos comunes en una colección de
                            entidades, que permite identificar unívocamente cada una de las entidades pertenecientes
                            a dicha colección. Asimismo, permiten distinguir entre sí las relaciones de un conjunto de
                            relaciones. Dentro de los conjuntos de entidades existen los siguientes tipos de claves:</p>


                        <p ALIGN="justify"><b>•Superclave:</b>Es un subconjunto de atributos que permite distinguir unívocamente
                            cada una de las entidades de un conjunto de entidades.</p>
                        <p ALIGN="justify"><b>•Clave candidata: </b>Dada una superclave, si ésta deja de serlo removiendo únicamente
                            uno de los atributos que la componen.</p>
                        <p ALIGN="justify"><b>•Clave primaria:</b> Es una clave candidata, elegida por el diseñador de la base de datos,
                            para identificar unívocamente las entidades en un conjunto de entidades.</p>


                        <p class="lead" ALIGN="justify">Los valores de los atributos de una clave, no pueden ser todos iguales para dos o más
                            entidades. Para poder distinguir las relaciones en un conjunto de relaciones R, se deben
                            considerar dos casos:</p>

                        <p ALIGN="justify"><b>R NO tiene atributos asociados:</b>Se usa como clave primaria de R la unión de las
                            claves primarias de todos los conjuntos de entidades participantes.</p>
                        <p ALIGN="justify"><b>R tiene atributos asociados: </b>Se usa como clave primaria de R la unión de los
                            atributos asociados y las claves primarias de todos los conjuntos de entidades
                            participantes.</p>

                        <h5> <a href="#"><b><u>Técnica para el modelado de datos utilizando diagramas entidad relación</u></b></a></h5>
                        <!-- Post Content -->
                        <ol>
                            <li>Se parte de una descripción textual del problema o sistema de información a automatizar.</li>
                            <li>Se hace una lista de los sustantivos y verbos que aparecen.</li>
                            <li> Los sustantivos son posibles entidades o atributos.</li>
                            <li>Los verbos son posibles relaciones.</li>
                            <li> Analizando las frases se determina la cardinalidad de las relaciones y otros detalles.</li>
                            <li>Se elabora el diagrama (o diagramas) entidad-relación.</li>
                            <li>Se completa el modelo con listas de atributos y una descripción de otras restricciones
                                que no se pueden reflejar en el diagrama.</li>
                        </ol>




                        <!-- Comments Form -->
                        <div class="card my-4">

                            <h5 class="card-header">
                                <button id='1' class='previous btn btn-success' type='button'>
                                    <span class="fa fa-arrow-circle-left"></span><a href="unidad2-2.php"> Anterior</a> </button> Leave a Comment: <button class='next btn btn-success chevron-right' type='button'> <a href="unidad2-4.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
