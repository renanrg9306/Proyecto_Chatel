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
                        <span class="nav-link-text">UNIDAD II:</span>
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

                        <p class="lead" ALIGN="justify">Un modelo de datos es una serie de conceptos que puede utilizarse para describir
                            un conjunto de datos y las operaciones para manipularlos. Hay dos tipos de modelos de
                            datos: los modelos conceptuales y los modelos lógicos. Los modelos conceptuales se
                            utilizan para representar la realidad a un alto nivel de abstracción.</p>

                        <p class="lead" ALIGN="justify">Mediante los modelos conceptuales se puede construir una descripción de la
                            realidad fácil de entender. En los modelos lógicos, las descripciones de los datos tienen
                            una correspondencia sencilla con la estructura física de la base de datos.</p>

                        <p class="lead" ALIGN="justify">En el diseño de bases de datos se usan primero los modelos conceptuales para
                            lograr una descripción de alto nivel de la realidad, y luego se transforma el esquema
                            conceptual en un esquema lógico. El motivo de realizar estas dos etapas es la dificultad de
                            abstraer la estructura de una base de datos que presente cierta complejidad. Un <b>esquema</b>
                            es un conjunto de representaciones lingüísticas o gráficas que describen la estructura de
                            los datos de interés.</p>

                        <p class="lead" ALIGN="justify">Los modelos conceptuales deben ser buenas herramientas para representar la
                            realidad, por lo que deben poseer las siguientes cualidades:</p>

                        <p ALIGN="justify"><b>•<u>Expresividad:</u></b>Deben tener suficientes conceptos para expresar perfectamente
                            la realidad. </p>
                        <p ALIGN="justify"><b>•<u>Simplicidad:</u></b> Deben ser simples para que los esquemas sean fáciles de
                            entender.</p>
                        <p ALIGN="justify"><b> •<u>Minimalidad: </u></b> Cada concepto debe tener un significado distinto.</p>
                        <p ALIGN="justify"><b> •<u>Formalidad: </u></b>Todos los conceptos deben tener una interpretación única, precisa
                            y bien definida.</p>
                        <!-- Preview Image -->
                        <hr>
                        <p class="lead" ALIGN="justify">En general, un modelo no es capaz de expresar todas las propiedades de una
                            realidad determinada, por lo que hay que añadir aserciones que complementen el esquema.
                            Algunos modelos con frecuencia utilizados en las bases de datos son:</p>

                        <p ALIGN="justify"><b>•Bases de datos jerárquicas.</b> </p>
                        <p ALIGN="justify"><b>•Base de datos relacional.</b></p>
                        <p ALIGN="justify"><b> •Bases de datos orientadas a objetos</b></p>
                        <p ALIGN="justify"><b>•Bases de datos documentales.</b> </p>
                        <p ALIGN="justify"><b>•Bases de datos deductivas.</b></p>
                        <p ALIGN="justify"><b> •Bases de datos distribuidas.</b></p>

                        <p class="lead" ALIGN="justify">Un modelo de datos para las DB es una colección de conceptos que se emplean
                            para describir la estructura de una base de datos. Esa colección de conceptos incluyen:
                            entidades, atributos y relaciones.</p>

                        <p class="lead" ALIGN="justify">Las bases de datos almacenan datos, permitiendo manipularlos fácilmente y
                            mostrarlos de diversas formas. El proceso de construir una base de datos es llamado diseño
                            de base de datos.</p>

                        <p class="lead" ALIGN="justify">La mayoría de los modelos de datos poseen un conjunto de operaciones básicas
                            para especificar consultas y actualizaciones de la base de datos, donde los modelos de
                            datos pueden clasificarse en:</p>

                        <p ALIGN="justify"><b>•<u>Modelos de datos de alto nivel o conceptuales:</u></b>Disponen de conceptos cercanos a
                            la forma en que los usuarios finales perciben una base de datos.</p>
                        <p ALIGN="justify"><b>•<u>Modelos de datos de bajo nivel o físicos:</u></b>Disponen de conceptos que describen
                            detalles sobre el almacenamiento de los datos en la computadora.</p>
                        <p ALIGN="justify"><b> •<u>Modelos de datos de representación o de implementación: </u></b> Disponen de conceptos que pueden entender los usuarios finales, pero que no están alejados de la forma
                            en que se almacenan los datos en la computadora.</p>

                        <p class="lead" ALIGN="justify">Los modelos de datos sirven para clasificar los distintos tipos de DBMS. Los modelos más conocidos y utilizados son:</p>
                        <p ALIGN="justify"><b>•Modelo entidad-relación.</b> </p>
                        <p ALIGN="justify"><b>•Modelo jerárquico.</b></p>
                        <p ALIGN="justify"><b> • Modelo de red.</b></p>
                        <p ALIGN="justify"><b>•Modelo relacional.</b> </p>
                        <hr>

                        <h5> <a href="#">2.1 Entidad - Relación</a></h5>
                        <!-- Post Content -->
                        <hr>
                        <p class="lead" ALIGN="justify">Este modelo se obtiene en tiempo de diseño de la base de datos. Fue propuesto por Peter Chen en 1976 y desde entonces se viene utilizando de una forma muy global. Se
                            caracteriza por utilizar una serie de símbolos y reglas para representar los datos y sus
                            relaciones. Con este modelo se consigue representar de manera gráfica la estructura lógica
                            de una base de datos.
                        </p>

                        <p class="lead" ALIGN="justify">En este modelo, el lugar y la forma en que se almacenen los datos no tienen relevancia.
                            Esto tiene la considerable ventaja de que es más fácil de entender y de utilizar para un
                            usuario esporádico de la base de datos. Los datos pueden ser recuperados o almacenada
                            mediante "consultas" que ofrecen una amplia flexibilidad y poder para administrar los datos.</p>

                        <p class="lead" ALIGN="justify">El modelo entidad – relación denominado así por sus siglas en inglés, E-R "Entity
                            Relationship", o del español DER "Diagrama de Entidad Relación" es una herramienta para
                            el modelado de datos que permite representar las entidades relevantes de un sistema de
                            información así como sus interrelaciones y propiedades. Este modelo se encuentra
                            conformado por los siguientes elementos:</p>

                        <p ALIGN="justify">
                            <li><b>Entidades:</b> </li>Representa una “cosa” u "objeto" del mundo real con existencia
                            independiente, es decir, se diferencia unívocamente de otro objeto o cosa, incluso
                            siendo del mismo tipo, o una misma entidad. Las entidades pueden ser fuertes o
                            débiles.
                        </p>

                        <ul style="list-style-type: square">
                            <li><b>Fuertes:</b>
                                <p ALIGN="justify">Son las que no dependen de otras entidades para existir.</p>
                            </li>
                            <li><b>Débiles:</b>
                                <p ALIGN="justify">Siempre dependen de otra entidad sino no tienen sentido por ellas
                                    mismas.</p>
                            </li>

                        </ul>

                        <p ALIGN="justify">Se puede considerar una entidad a los sujetos, objetos, a los eventos, a los
                            lugares, y a las abstracciones donde:
                        </p>

                        <p ALIGN="justify"><b>• Sujeto: </b>Pueden ser personas y organizaciones que originen
                            transacciones por ejemplo: cliente, proveedor, empleado, estudiante,
                            profesor, etc.</p>

                        <p ALIGN="justify"><b>• Objeto: </b>Son entes tangibles como cuales productos por ejemplo:
                            producto, articulo, etc.</p>
                        <p ALIGN="justify"><b> • Evento: </b>Son transacciones generadas por sujetos y que afectan a los
                            objetos, por ejemplo: pedido, ajustar, colegiatura, etc.</p>
                        <p ALIGN="justify"><b>• Lugares:</b> La ubicación de los objetos y sujetos por ejemplo: ciudad, país,
                            bodega, salón, oficina, etc.</p>
                        <p ALIGN="justify"><b>•Abstracción:</b> Son conceptos empleados para clasificar, calificar, o medir
                            otras entidades, por ejemplo: tipo de cliente, tipo de cuenta, unidad de
                            medida, nivel estudio, etc.</p>

                        <p ALIGN="justify">
                            <li><b>Atributos: </b> </li>Son propiedades de las entidades que interesan para almacenarse en la
                            DB. Por ejemplo, la entidad “Alumno” podría tener los atributos nombre, apellido,
                            año de nacimiento, etc. A los atributos que son clave se les antepone el símbolo #,
                            a los atributos obligatorios se les antepone el símbolo * y a los atributos opcionales
                            se les agrega el símbolo °. Los atributos pueden ser:
                        </p>

                        <ul style="list-style-type: square">
                            <li><b>Atributo Simple: </b>
                                <p ALIGN="justify"> Tiene un solo componente, que no se puede dividir en
                                    partes más pequeñas que tengan un significado propio.</p>
                            </li>
                            <li><b>Atributo Compuesto:</b>
                                <p ALIGN="justify"> Es un atributo con varios componentes, cada uno con
                                    un significado por sí mismo.</p>
                            </li>
                            <li><b>Atributo Monovalente:</b>
                                <p ALIGN="justify">Es aquel que tiene un solo valor para cada ocurrencia
                                    de la entidad o relación a la que pertenece.</p>
                            </li>
                            <li><b>Atributo Polivalente: </b>
                                <p ALIGN="justify">Es aquél que tiene varios valores para cada ocurrencia
                                    dela entidad o relación a la que pertenece.</p>
                            </li>

                        </ul>

                        <p ALIGN="justify">
                            <li><b>Relaciones:</b> </li>Podemos definir la relación como una asociación de dos o más
                            entidades. A cada relación se le asigna un nombre para poder distinguirla de las
                            demás y saber su función dentro del modelo entidad-relación. Existen 4 tipos de
                            relaciones las cuales son:
                        </p>
                        <ol>
                            <li ALIGN="justify"><b>Uno a Uno (1:1): </b>Un registro de una entidad A se relaciona con solo un
                                registro en una entidad B. (ejemplo dos entidades, profesor y departamento,
                                con llaves primarias, codigo_profesor y jefe_depto respectivamente, un
                                profesor solo puede ser jefe de un departamento y un departamento solo
                                puede tener un jefe).</li>

                            <hr>
                            <!-- Preview Image -->
                            <center>
                                <img class="img-fluid rounded" src="../images/1a1.PNG" alt="">
                            </center>
                            <hr>

                            <center>
                                <img class="img-fluid rounded" src="../images/uno%20a%20uno.jpg" alt="">
                            </center>
                            <hr>
                            <li ALIGN="justify"><b>Uno a Varios (1:N): </b>Un registro en una entidad en A se relaciona con cero o
                                muchos registros en una entidad B. Pero los registros de B solamente se
                                relacionan con un registro en A. (ejemplo: dos entidades, vendedor y ventas,
                                con llaves primarias, codigo_vendedor y venta, respectivamente, un
                                vendedor puede tener muchas ventas pero una venta solo puede tener un
                                vendedor).</li>
                            <hr>
                            <!-- Preview Image -->
                            <center>
                                <img class="img-fluid rounded" src="../images/1av.PNG" alt="">
                            </center>
                            <hr>

                            <center>
                                <img class="img-fluid rounded" src="../images/unoamuchos.jpg" alt="">
                            </center>
                            <hr>
                            <li ALIGN="justify"><b>Varios a Uno (N:1): </b>Una entidad en A se relaciona exclusivamente con una
                                entidad en B. Pero una entidad en B se puede relacionar con 0 o muchas
                                entidades en A (ejemplo empleado-centro de trabajo).</li>

                            <hr>
                            <!-- Preview Image -->
                            <center>
                                <img class="img-fluid rounded" src="../images/vav.PNG" alt="">
                            </center>
                            <hr>
                            <li ALIGN="justify"><b>Varios a Varios (N:M):</b>Una entidad en A se puede relacionar con 0 o con
                                muchas entidades en B y viceversa (ejemplo asociaciones-ciudadanos,
                                donde muchos ciudadanos pueden pertenecer a una misma asociación, y
                                cada ciudadano puede pertenecer a muchas asociaciones distintas).</li>
                            <hr>
                            <!-- Preview Image -->
                            <center>
                                <img class="img-fluid rounded" src="../images/vav2.PNG" alt="">
                            </center>
                            <hr>

                        </ol>
                        <p ALIGN="justify"><b>Por ejemplo: </b>Una empresa que requiere controlar a los vendedores y las ventas que
                            ellos realizan; de este problema se puede determinar que los objetos o entidades
                            principales a estudiar son el empleado (vendedor) y el artículo (que es el producto en venta),
                            y las características que los identifican son:</p>

                        <hr>
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/er.PNG" alt="">
                        </center>
                        <hr>

                        <p ALIGN="justify">La relación entre ambas entidades la podemos establecer como Venta. Para
                            representa un modelo E-R gráficamente, la representación es muy sencilla, se emplean
                            símbolos, los cuales son:</p>
                              <hr>
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/eje.PNG" alt="">
                        </center>
                        <hr>


                        <p ALIGN="justify">El ejemplo anterior quedaría representado de la siguiente forma:</p>
                         <hr>
                          <center>
                            <img class="img-fluid rounded" src="../images/reje.PNG" alt="">
                        </center>
                        <hr>

                       
                        <!-- Comments Form -->
                        <div class="card my-4">

                            <h5 class="card-header">Leave a Comment: <button class='next btn btn-success chevron-right' type='button'> <a href="unidad2-2.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
