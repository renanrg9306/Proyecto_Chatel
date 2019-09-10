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

                            <a href="#">4.2 Definición del lenguaje de consulta (Secuency Query Language) SQL.</a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p>Posted on January 1, 2018 at 12:00 PM</p>

                        <hr>
                        <h5> <a href="#"><b>Introducción</b></a></h5>
                        <!-- Post Content -->
                        <p class="lead" ALIGN="justify">El SQL tiene su origen en el System R. Fue desarrollado por IBM Research
                            Laboratory de San José, California, como parte de un programa de
                            investigación sobre el modelo de datos relacional.</p>

                        <p class="lead" ALIGN="justify">Hoy en día, la gran mayoría de productos relacionales incorporan el SQL
                            como lenguaje de consulta.</p>

                        <p class="lead" ALIGN="justify">El SQL es un lenguaje relacional de consultas, constituido de tres
                            componentes principales:</p>

                        <ul>
                            <li class="lead" ALIGN="justify">Un lenguaje de definición de los datos</li>
                            <li class="lead" ALIGN="justify">Un lenguaje de manipulación de los datos</li>
                            <li class="lead" ALIGN="justify">Un lenguaje de control de acceso</li>

                        </ul>

                        <hr>
                        <h5> <a href="#"><b>Definición de los datos</b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">En el ambiente del lenguaje SQL, una relación se denomina tabla y un atributo
                            se denomina columna. Con el lenguaje SQL se pueden definir, suprimir y
                            modificar tablas, índices y vistas.</p>

                        <p class="lead" ALIGN="justify">Creación de nuevas tablas</p>

                        <p class="lead" ALIGN="justify">La definición de las tablas, las que llamaremos tablas base para diferenciarlas
                            de las vistas o tablas derivadas, se hace por medio de la instrucción CREATE
                            TABLE. La palabra TABLE es seguida por el nombre de la tabla a ser creada
                            y luego por los nombres y tipos de datos de las columnas o campos que
                            componen la tabla. Las reglas para el nombramiento de tablas y campos
                            varían ligeramente de una versión de SQL a otra. Las restricciones típicas
                            son:</p>

                        <ul>
                            <li>Los nombres no pueden ser mayores que 18 caracteres.</li>
                            <li>Los nombres deben iniciar con una letra</li>
                            <li>Los nombres pueden contener letras, números y el símbolo de subrayado
                                (_).</li>
                            <li>Los nombres no pueden contener espacios.</li>
                        </ul>

                        <hr>
                        <h5> <a href="#"><b>La sintaxis de la instrucción CREATE TABLE es la siguiente:</b></a></h5>
                        <!-- Post Content -->

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/td1.PNG" alt="">
                        </center>
                        <hr>

                        <hr>
                        <h5> <a href="#"><b>Restricción de atributo:</b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">NOT NULL</p>
                        <p class="lead" ALIGN="justify">DEFAULT &#8804;valor&#8805;</p>
                        <center>
                            <img class="img-fluid rounded" src="../images/rt.PNG" alt="">
                        </center>
                        <hr>


                        <p class="lead" ALIGN="justify"><b>Ejemplo:</b></p>


                        <li class="lead" ALIGN="justify">Para crear la tabla CARRERA, se procede de la siguiente forma:</li>

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/create.PNG" alt="">
                        </center>
                        <hr>


                        <li class="lead" ALIGN="justify">Si se desea crea una tabla para definir la estructura de la tabla
                            ESTUDIANTE, se procede de la siguiente forma:</li>

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/cte.PNG" alt="">
                        </center>
                        <li class="lead" ALIGN="justify">Nota: En SQL los comandos son libres de formato. Por ejemplo, la instrucción
                            anterior podría haberse escrito así:</li><br>

                        <p class="#" ALIGN="justify"><b>create table estudiante (carnet char(10) not null, nombre char(35) not null,
                                carrera char(3) not null, Genero char(1) default ‘m’, edad smallint)
                                primary key (carnet), foreign key (carrera) references carrera (cod_carrera) on
                                delete cascade on update cascade</b></p>

                        <hr>
                        <h5> <a href="#"><b><u>Cambios en la estructura de una tabla</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Los cambios posibles son:</p>

                        <ul>
                            <li>Adicionar una nueva columna,</li>
                            <li>Suprimir una columna existente, o</li>
                            <li>Modificar el tipo de datos de una columna existente.</li>
                        </ul>

                        <p class="lead" ALIGN="justify">Para ello, se utilizan respectivamente las sig. instrucciones ALTER TABLE:</p>


                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/alter.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify">Ejemplo</p>

                        <p class="lead" ALIGN="justify"><b>Supongamos que se desea adicionar la columna año_ingreso a la tabla
                                ESTUDIANTE y que además se desea cambiar la columna edad por
                                fecha_nacimiento. Entonces, se utilizan las siguientes instrucciones ALTER
                                TABLE:</b></p>

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/alter2.PNG" alt="">
                        </center>
                        <hr>


                        <h5> <a href="#"><b><u>Eliminación de una tabla</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Para suprimir una tabla de la base de datos, se utiliza la siguiente instrucción:</p>

                        <p class="lead" ALIGN="justify"><a href="">DROP TABLE nombre-tabla</a></p>

                        <h5> <a href="#"><b><u>Manipulación de los datos</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Una vez que se han definido las tablas base, se procede a registrar los datos y
                            a consultarlos, por medio de las instrucciones que permiten la manipulación de
                            los datos, las cuales se describirán a continuación.</p>

                        <h5> <a href="#"><b><u>Insertar datos en una tabla</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Para insertar datos en una tabla, se utiliza la siguiente instrucción:</p>

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/insert.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Ejemplo:</b></p>

                        <p class="lead" ALIGN="justify">Primero se agregan los registros de la tabla Carrera (para mantener la
                            integridad referencial)</p>

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/insert1.PNG" alt="">
                        </center>
                        <hr>
                        <p class="lead" ALIGN="justify">Luego se insertan los registros de la tabla Estudiante</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/insert2.PNG" alt="">
                        </center>
                        <hr>

                        <h5> <a href="#"><b><u>Modificar los datos de una tabla</u></b></a></h5>
                        <!-- Post Content -->
                        <p class="lead" ALIGN="justify">Una vez que se han almacenado los datos en la tabla base, se puede desear
                            modificar su contenido. Para ello, se utiliza la siguiente instrucción:</p>

                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/m1.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Ejemplo:</b></p>

                        <p class="lead" ALIGN="justify"><b>Supóngase que se trasladen a los estudiantes de la carrera de ‘Ingeniería
                                en Computación’ a la carrera de ‘Ingeniería en Sistemas’. Entonces, dicha
                                modificación se hace de la siguiente forma:</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/update.PNG" alt="">
                        </center>
                        <hr>


                        <h5> <a href="#"><b><u>Borrar datos de una tabla</u></b></a></h5>

                        <p class="lead" ALIGN="justify"><b>Ahora, si se desean suprimir o borrar datos de una tabla se utiliza la
                                instrucción siguiente:</b></p>


                        <center>
                            <img class="img-fluid rounded" src="../images/b1.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify">Ejemplo:</p>

                        <p class="lead" ALIGN="justify">Supongamos que se desean suprimir los datos de los estudiantes de la
                            carrera ‘IQM’. Entonces, se hace lo siguiente:</p>


                        <center>
                            <img class="img-fluid rounded" src="../images/b2.PNG" alt="">
                        </center>
                        <p class="lead" ALIGN="justify">Así, los datos de la tabla estudiante serán los siguientes:</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/b3.PNG" alt="">
                        </center>
                        <hr>


                        <h5> <a href="#"><b><u>Definición general de una consulta</u></b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">La estructura fundamental del lenguaje SQL es el llamado bloque SFW o
                            bloque de selección/proyección:</p>
                        <center>
                            <img class="img-fluid rounded" src="../images/s1.PNG" alt="">
                        </center>
                        <hr>

                        <p class="#" ALIGN="justify">La instrucción SELECT x1, x2, ..., xn traduce el operador de proyección del
                            álgebra relacional y brinda la salida de la tabla resultado. Por su parte, la
                            instrucción FROM r1, r2, ..., rm brinda la lista de las relaciones involucradas en
                            la consulta. Finalmente, WHERE e es un criterio de selección, que representa
                            el predicado del operador selección del álgebra relacional.</p>

                        <p class="#" ALIGN="justify">Dentro de una expresión WHERE se pueden utilizar los siguientes operadores:</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/s2.PNG" alt="">
                        </center>
                        <hr>

                        <p class="#" ALIGN="justify">A pesar de que la forma fundamental del lenguaje SQL es el llamado bloque
                            SFW, se puede generalizar cualquier consulta de la siguiente forma:</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/s3.PNG" alt="">
                        </center>
                        <hr>
                        <p class="#" ALIGN="justify">A continuación y mediante ejemplos, se van a estudiar las consultas en SQL.</p>

                        <h5> <a href="#"><b>Ejemplo:</b></a></h5>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify">Liste todo el contenido de la tabla estudiante</p>
                        <center>
                            <img class="img-fluid rounded" src="../images/s4.PNG" alt="">
                        </center>
                        <hr>
                        <p class="lead" ALIGN="justify">Liste el número de carnet, nombre y carrera de los estudiantes de la tabla
                            ESTUDIANTE.</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/s5.PNG" alt="">
                        </center>
                        <hr>
                        <p class="lead" ALIGN="justify">De los nombres y fecha de nacimiento de todos los estudiantes de Genero
                            femenino.</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/s6.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify">Con el fin de ampliar los ejemplos presentados, supondremos que se realizó el
                            ingreso de nuevos datos con la instrucción INSERT de manera que la
                            información de las tablas CARRERA y ESTUDIANTE se visualiza de la
                            siguiente forma:</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/s7.PNG" alt="">
                        </center>
                        <center>
                            <img class="img-fluid rounded" src="../images/s8.PNG" alt="">
                        </center>
                        <hr>

                        <h5> <a href="#"><b>Ejemplo:</b></a></h5>
                        <!-- Post Content -->

                        <p>Muestre los nombres de los estudiantes de Genero masculino que nacieron
                            después del 01/01/80.</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/s9.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b>Muestre los números de carnet, los nombres y carreras de los estudiantes que
                                estudian la carrera ICO o ISS.</b></p>


                        <center>
                            <img class="img-fluid rounded" src="../images/s10.PNG" alt="">
                        </center>

                        <p class="lead" ALIGN="justify">Liste toda la información de los estudiantes que no estudian la carrera de ARQ</p>
                        <center>
                            <img class="img-fluid rounded" src="../images/s11.PNG" alt="">
                        </center>
                        <hr>
                        <p class="lead" ALIGN="justify">Liste el número de carnet, el nombre y la carrera de los estudiantes que llevan
                            por nombre José.</p>
                        <center>
                            <img class="img-fluid rounded" src="../images/s12.PNG" alt="">
                        </center>
                        <hr>

                        <h4> <a href="#"><b><u>Funciones de cálculo en SQL</u></b></a></h4>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">SQL tiene funciones de cálculo también llamadas interconstruidas
                            (construidas a lo interno del lenguaje) para facilitar la realización de ciertos
                            cálculos, tales como sumas y promedios. A continuación se listan las
                            funciones disponibles:</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/fu1.PNG" alt="">
                        </center>
                        <br>
                        <center>
                            <img class="img-fluid rounded" src="../images/fu2.PNG" alt="">
                        </center>
                        <hr>

                        <h5> <a href="#"><b>Ejemplo:</b></a></h5>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify">Cuente todos los estudiantes que estudian la carrera de Ingeniería Industrial</p>


                        <center>
                            <img class="img-fluid rounded" src="../images/fu3.PNG" alt="">
                        </center>

                        <p class="lead" ALIGN="justify">Devuelva la última fecha de nacimiento contenida en la tabla ESTUDIANTE
                            para todos aquellos estudiantes que no estudian la carrera IMC.</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/fu4.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify">Cuente todos las carreras en las cuales hay registrados estudiantes</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/fu5.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify">Con esta instrucción lo que se hizo fue contar aquellos registros que contenían
                            información en el campo carrera, sin embargo no es cierto que hay 13 carreras
                            puesto que hay varios estudiantes inscritos en algunas carreras. Para obtener
                            un resultado mas exacto es necesario utilizar la cláusula DISTINCT para que
                            cuente solo aquellas carreras que son distintas entre sí.</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/fu6.PNG" alt="">
                        </center>
                        <hr>

                        <h4> <a href="#"><b><u>Uso del ORDER BY</u></b></a></h4>
                        <!-- Post Content -->
                        <hr>
                        <p class="lead" ALIGN="justify"><b>En ocasiones se desea visualizar el resultado de una consulta en un orden
                                particular. En SQL, esto se hace utilizando la cláusula ORDER BY.</b></p>

                        <p class="#" ALIGN="justify"><b>Ejemplo:</b></p>

                        <p class="lead" ALIGN="justify"><b>Liste toda la información de los estudiantes que no estudian la carrera ARQ
                                ordena por numero de carnet</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/fu7.PNG" alt="">
                        </center>
                        <hr>


                        <h4> <a href="#"><b><u>Uso del GROUP BY</u></b></a></h4>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify"><b>La cláusula GROUP BY permite agrupar registros según la información
                                contenida en un campo.</b></p>

                        <p class="lead" ALIGN="justify"><b>Ejemplo:</b></p>

                        <p class="lead" ALIGN="justify"><b>Para averiguar cuantos estudiantes están inscritos en cada carrera se utiliza la
                                siguiente instrucción:</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/fu8.PNG" alt="">
                        </center>

                        <p class="lead" ALIGN="justify"><b>Si la misma información se quisiera ver ordenada por carrera, la instrucción a
                                utilizar sería la siguiente:</b></p>
                        <center>
                            <img class="img-fluid rounded" src="../images/fu9.PNG" alt="">
                        </center>

                        <p class="lead" ALIGN="justify"><b>A veces es conveniente declarar una condición que se aplica a los grupos mas
                                a que a los registros individuales de la tabla. Para ello es muy útil la cláusula
                                HAVING.</b></p>

                        <p class="lead" ALIGN="justify"><b>Ejemplo:</b></p>

                        <p class="lead" ALIGN="justify"><b>Suponga que se desea hacer la consulta anterior, pero solo se desea obtener
                                aquellas carreras en las cuales hay mas de un estudiante inscrito. Para ello se
                                utiliza la siguiente instrucción:</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/fu10.PNG" alt="">
                        </center>
                        <hr>

                        <h4> <a href="#"><b><u>JOIN de dos o más tablas</u></b></a></h4>
                        <!-- Post Content -->

                        <p class="lead" ALIGN="justify"><b>Primero necesitamos incluir otras tablas para poder hacer el JOIN entre ellas.</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/j1.PNG" alt="">
                        </center>
                        <br>
                        <center>
                            <img class="img-fluid rounded" src="../images/j2.PNG" alt="">
                        </center>


                        <p class="lead" ALIGN="justify"><b>Una forma común para acceder los datos de más de una tabla es haciendo el
                                JOIN entre ellas, encontrando los registros en las dos tablas que tienen el
                                mismo valor en campos iguales. Esto se hace mediante las condiciones
                                apropiadas en la cláusula WHERE.</b></p>

                        <p class="lead" ALIGN="justify"><b>Ejemplo:</b></p>

                        <p class="lead" ALIGN="justify"><b>Liste para cada estudiante su numero de carnet y el nombre de la(s) materia(s)
                                que está recibiendo.</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/j3.PNG" alt="">
                        </center>



                        <p class="lead" ALIGN="justify"><b>Liste para cada materia su numero y el nombre de los estudiantes que la están
                                recibiendo.</b></p>

                        <center>
                            <img class="img-fluid rounded" src="../images/j4.PNG" alt="">
                        </center>


                        <p class="lead" ALIGN="justify"><b>Liste para cada estudiante su nombre y el nombre de la(s) materia(s) que está
                                recibiendo.</b></p>


                        <center>
                            <img class="img-fluid rounded" src="../images/j5.PNG" alt="">
                        </center>





                        <!-- Comments Form -->
                        <div class="card my-4">

                            <h5 class="card-header"> <button id='1' class='previous btn btn-success' type='button'>
                                    <span class="fa fa-arrow-circle-left"></span><a href="unidad4-1.php"> Anterior</a> </button>Leave a Comment: <button class='next btn btn-success chevron-right' type='button'> <a href="../unidad5/unidad5-1.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
