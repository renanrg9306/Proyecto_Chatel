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
                        <span class="nav-link-text">UNIDAD II: MODELO DE DATOS RELACIONAL</span>
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
                        <h5> <a href="#"><b>2.2 Jerárquico</b></a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p class="lead" ALIGN="justify">Éstas son DB que, como su nombre indica, almacenan sus datos en una estructura
                            jerárquica. En este modelo los datos se organizan en una forma similar a un árbol (visto al
                            revés), en donde un nodo padre de datos puede tener varios hijos. El nodo más alto o a
                            que que no tiene padres es llamado <b>raíz</b>, y a los nodos que no tienen hijos se los conoce
                            como <b>hojas</b>. Cada nodo representa un registro con sus correspondientes campos. Los
                            diferentes niveles del árbol quedan unidos mediante relaciones.</p>

                        <p class="lead" ALIGN="justify">Las bases de datos jerárquicas son especialmente útiles en el caso de aplicaciones que manejan un gran volumen de datos y datos muy compartidos permitiendo crear
                            estructuras estables y de gran rendimiento.</p>

                        <p class="lead" ALIGN="justify">Una de las principales limitaciones de este modelo es su incapacidad de representar eficientemente la redundancia de datos.</p>
                        <hr>
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/ejer.PNG" alt="">
                        </center>
                        <hr>


                        <p class="lead" ALIGN="justify">En este modelo solo se pueden representar relaciones 1:M, por lo que presenta
                            varios inconvenientes:</p>

                        <p ALIGN="justify"><b>•No se admiten relaciones N:M</b></p>
                        <p ALIGN="justify"><b>•Un segmento hijo no puede tener más de un padre.</b> </p>
                        <p ALIGN="justify"><b> •No se permiten más de una relación entre dos segmentos.</b></p>
                        <p ALIGN="justify"><b> •Para acceder a cualquier segmento es necesario comenzar por el segmento raíz.</b></p>
                        <p ALIGN="justify"><b> •El árbol se debe de recorrer en el orden designado.</b></p>
                        <!-- Preview Image -->
                        <hr>

                        <h5> <a href="#"><b>2.3 De red</b></a></h5>
                        <!-- Post Content -->
                        <hr>
                        <p class="lead" ALIGN="justify">En este modelo las entidades se representan como nodos y sus relaciones son las
                            líneas que los unen. En esta estructura cualquier componente puede relacionarse con
                            cualquier otro.</p>

                        <p class="lead" ALIGN="justify">El Modelo de Red se puede entender como una extensión del modelo jerárquico.
                            También se presenta mediante un árbol, pero en este caso, cada hijo puede tener varios
                            padres. De este modo se reducen, o eliminan, las redundancias, Pero desaparece la
                            herencia de los campos. La integridad de datos, asociada a los arcos padre-hijo, se
                            mantiene.</p>

                        <p class="lead" ALIGN="justify">Una Base de Datos de Red se compone de dos conjuntos:</p>

                        <p ALIGN="justify"><b>•El Conjunto de los Registros.</b> Un conjunto de instancias múltiples de varios tipos de
                            registros. </p>
                        <p ALIGN="justify"><b>•El Conjunto de las Relaciones.</b> Un conjunto de instancias múltiples de varios tipos
                            de relaciones.</p>
                        <hr>

                        <h5> <a href="#"><u>Elementos Básicos</u></a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p class="lead" ALIGN="justify">En rigor, como elementos del modelo de datos lógicos sólo se consideran los 4
                            primeros, ya que tanto el área como la clave de base de datos son elementos de tipo físico.</p>

                        <p ALIGN="justify"><b>•<u>Campo o elemento de datos (data ítem):</u></b>Es la unidad de datos más pequeña a la
                            que se puede hacer referencia. Un campo ha de tener un nombre y una ocurrencia
                            del mismo contiene un valor que puede ser de distinto tipo (booleano, numérico,
                            etc.) </p>
                        <p ALIGN="justify"><b>•<u>Agregado de datos (data aggregate):</u></b> Puede ser un vector con un número fijo de
                            elementos (ejemplo: la fecha, que está compuesta de día, mes, año) o bien un grupo
                            repetitivo (ejemplo: conjunto de salarios por diferentes conceptos).</p>
                        <p ALIGN="justify"><b>•<u>Registro (record): </u></b>Es la unidad básica de acceso y manipulación de la base de datos. </p>
                        <p ALIGN="justify"><b>•<u>Conjunto (SET o COSET):</u></b> Es una colección de dos o más tipos de registros que
                            establece una vinculación entre ellos, constituye el elemento clave y distintivo de
                            este modelo.</p>
                        <p ALIGN="justify"><b>•<u>Área (área o realm):</u></b>Es la subdivisión del espacio de almacenamiento direccionable
                            de la DB que contiene ocurrencias de registros (páginas de discos, cilindros, etc.).
                            En un área puede haber ocurrencias de más de un tipo de registro pueden estar
                            contenidas en distintas áreas, aunque una ocurrencia determinada tiene que estar
                            siempre asignada a un área y solo a una. </p>
                        <p ALIGN="justify"><b>•<u>Clave de Base de Datos (database – key): </u></b>Identificador interno único para cada
                            ocurrencia de registro que proporciona su dirección en la DB. </p>

                        <hr>

                        <h5> <a href="#"><u>Representación de Red</u></a></h5>
                        <!-- Post Content -->
                        <hr>
                        <p ALIGN="justify"><b>•<u>Diagrama de ocurrencias,</u></b>aparecen arcos que conectan los árboles.</p>
                        <p ALIGN="justify"><b>•<u>Diagramas de Bachman </u></b>se extienden, apareciendo flechas doble-doble que
                            representan las relaciones muchos-a-muchos de las redes complejas. </p>

                        <hr>

                        <h5> <a href="#"><u>Tipos de Redes</u></a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p ALIGN="justify"><b>•<u>Red Simple:</u></b> Los padres de un hijo son instancias de registros de tipo diferentes.</p>

                        <hr>
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/rs.PNG" alt="">
                        </center>
                        <hr>

                        <p ALIGN="justify"><b>•<u>Red Compleja:</u></b> Los padres pueden ser instancias del mismo tipo de registros, puede desaparecer todo tipo de redundancia, pero perdiendo la herencia. En algunos
                            casos, resulta interesante permitir cierto grado de redundancia, para evitar pérdida
                            de información. Otra alternativa es convertir una red compleja en una red simple en
                            donde no se pierda la información. </p>
                        <hr>
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/rc.PNG" alt="">
                        </center>
                        <hr>

                        <p ALIGN="justify"><b>•<u>Conversión Compleja-Simple</u></b></p>
                        <ol>
                            <li>Permite reducir el problema de la pérdida de información asociado a las redes
                                complejas.</li>
                            <li>La idea es convertir una relación muchos-a- muchos en dos relaciones uno-amuchos, mediante la inserción de un nuevo tipo de registro</li>
                            <li>Este registro se denomina Registro Intersección si contiene algún tipo de
                                información, que se denomina Datos de la Intersección. En otro caso, se denomina
                                Registro de Enlace</li>
                        </ol>
                        <hr>
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/ccs.PNG" alt="">
                        </center>
                        <hr>



                        <h5> <a href="#"><u>Ciclos y Lazos</u></a></h5>
                        <!-- Post Content -->
                        <hr>
                        <p class="lead" ALIGN="justify">Existen dos tipos de relaciones específicas, los Ciclos y los Lazos.</p>

                        <p ALIGN="justify"><b>•<u>En un ciclo,</u></b> diferentes tipos de registro se relacionan de modo circular.</p>
                        <p ALIGN="justify"><b>•<u>Los lazos </u></b>representan la relación de un tipo de registro consigo mismo.</p>

                        <p class="lead" ALIGN="justify">Pueden aparecer ciclos en redes complejas y en redes simples. En redes complejas, se puede aplicar a los ciclos la conversión compleja-simple. Los lazos sólo pueden manejarse
                            en redes complejas.</p>

                        <hr>
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/cyl.PNG" alt="">
                        </center>
                        <hr>

                        <h5> <a href="#"><u>Manipulación de los Datos</u></a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p class="lead" ALIGN="justify">Los lenguajes asociados contienen operadores que manejan datos almacenados en
                            conjuntos de registros y relaciones. Deben contener los siguientes operadores:</p>

                        <ul>
                            <li>Búsqueda de un registro específico.</li>
                            <li>Movimiento del padre al primer hijo de una relación.</li>
                            <li> Movimiento de un hijo al siguiente en una relación.</li>
                            <li>Movimiento del hijo al padre de una relación.</li>
                            <li>Creación, borrado y modificación de un registro.</li>
                            <li> Inserción y eliminación de un hijo en una relación.</li>
                            <li> Cambio de relación de un hijo</li>
                        </ul>

                        <p ALIGN="justify">A diferencia del modelo jerárquico, en este modelo, un hijo puede tener varios padres.
                            Los conceptos básicos en el modelo de red son:</p>
                        <ul>
                            <li>El tipo de registro que representa un nodo.</li>
                            <li>Elemento que es un campo de datos.</li>
                            <li>Agregado de datos, que define un conjunto de datos con nombre.
                                Este modelo de datos permite representar relaciones N:M</li>
                        </ul>

                        <p ALIGN="justify">Aquí se representa los datos mediante colecciones de registros y sus relaciones se
                            representan por medio de ligas o enlaces, los cuales pueden verse como punteros. Los
                            registros se organizan en un conjunto de gráficas arbitrarias.
                        </p>

                        <p ALIGN="justify">Podemos considerar al modelo de bases de datos en red como de una potencia
                            intermedia entre el jerárquico y el relacional. Su estructura es parecida a la jerárquica
                            aunque bastante más compleja, con lo que se consiguen evitar, al menos en parte, los
                            problemas del modelo jerárquico. Los conceptos fundamentales que debe conocer el
                            administrador para definir el esquema son los siguientes:</p>

                        <p ALIGN="justify"><b>•Registro: </b> Es cada una de las fichas almacenadas en un fichero convencional.</p>
                        <p ALIGN="justify"><b> • Campos o elementos de datos. </b> Son cada uno de los apartados de que se compone
                            una ficha.</p>
                        <p ALIGN="justify"><b>• Conjunto:</b> Es el concepto que permite relacionar entre sí tipos de registro distintos.Podemos imaginar los registros simplemente como fichas de un fichero. Suponiendo
                            un tipo de registro de clientes, y un tipo de registro de vuelos de avión, y se quiere
                            asociar ambas informaciones, de manera que para cada vuelo se quiere saber
                            cuáles son los pasajeros que viajan en él. La forma de hacerlo es a través de un
                            conjunto. Un conjunto relaciona dos tipos de registro. Uno de ellos es el registro
                            propietario del conjunto, y el otro es el miembro.</p>


                        <hr>

                        <h5> <a href="#"><b><u>2.4 Relacional</u></b></a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p ALIGN="justify">Definido por E.F. Codd en 1970, se fundamenta en conceptos matemáticos.
                            La estructura de datos básicos es la Relación, denominada normalmente como Tabla. Una
                            base de datos relacional se compone de una colección de relaciones. Cuando una tabla
                            contiene datos se dice que es una instancia de la relación. Cada relación se asocia a una
                            entidad, y se compone de una serie de atributos. Las filas de la tabla definen las instancias
                            de la entidad, y son las Tuplas de la Relación. No se permiten tuplas duplicadas en una
                            tabla, aunque los DMBS no suelen controlarlo. Las columnas de la tabla son las ocurrencias
                            de los atributos de la entidad. Con cada atributo se asocia un Dominio que define el posible
                            rango de valores. Dicho dominio define una Restricción de los atributos. La manipulación
                            de los datos se realiza mediante Lenguajes de Especificación.
                        </p>

                        <p ALIGN="justify">De tal modo que el usuario indica que datos desea, sin especificar como obtenerlos
                            Este modelo es el más utilizado actualmente ya que utiliza tablas bidimensionales para
                            la representación lógica de los datos y sus relaciones.
                        </p>
                        <p ALIGN="justify">Algunas de sus principales características son:</p>
                        <ul>
                            <li>Puede ser entendido y usado por cualquier usuario.</li>
                            <li>Permite ampliar el esquema conceptual sin modificar las aplicaciones de gestión.</li>
                            <li>Los usuarios no necesitan saber dónde se encuentran los datos físicos.</li>
                        </ul>

                        <p ALIGN="justify">El elemento principal de este modelo es la relación que se presenta mediante una tabla.
                        </p>
                        <p ALIGN="justify">En este modelo se representan los datos y las relaciones entre estos, a través de
                            una colección de tablas, en las cuales los renglones (tuplas) equivalen a los cada uno deElaboro: LIA. Blanca García Sánchez los registros que contendrá la base de datos y las columnas corresponden a las
                            características(atributos) de cada registro localizado en la tupla;</p>

                        <hr>
                        <!-- Preview Image -->
                        <center>
                            <img class="img-fluid rounded" src="../images/rel.PNG" alt="">
                        </center>
                        <hr>

                        <h5> <a href="#"><u>Claves</u></a></h5>
                        <!-- Post Content -->

                        <p ALIGN="justify">Son el conjunto mínimo de atributos que identifican unívocamente cada tupla en una
                            relación, si existen varios tipos tales como son:</p>

                        <ul>
                            <li><b><u> Clave Compuesta: </u></b>Está formada por más de un atributo.</li>
                            <li><b><u>Clave Candidata:</u></b>Es cualquier conjunto de atributos que puede ser elegido como una
                                clave en una relación. Se representa mediante las siglas CK.</li>
                            <li><b><u>Clave Primaria:</u></b>Es la clave candidata elegida como clave única de la relación. Se
                                representa por las siglas PK.</li>
                            <li><b><u> Clave Foránea:</u></b>Es un conjunto de atributos en una relación que constituyen una clave
                                en alguna otra relación; usada para indicar enlaces lógicos entre relaciones. Se
                                representa mediante las siglas FK.</li>
                        </ul>

                        <h5> <a href="#"><u>Simbología</u></a></h5>
                        <!-- Post Content -->

                        <p ALIGN="justify">El significado de los símbolos utilizados en las tablas relacionales son los siguientes:</p>

                        <ul>
                            <li><b><u>NN: </u></b>Define que un campo en una base de datos no puede ser nulo esto quiere decir
                                que debe tener un valor.</li>
                            <li><b><u>PK: :</u></b>Es la llave primaria de una relación.</li>
                            <li><b><u>FK:</u></b> Es la llave foránea de una relación.</li>
                            <li><b><u>CK:</u></b> Es la llave candidata de una relación</li>
                        </ul>
                        <hr>

                        <h5> <a href="#"><u>Reglas para la construcción del modelo relacional</u></a></h5>
                        <!-- Post Content -->

                        <ol>
                            <li>Cuando se tienen relaciones con tipo de correspondencia 1:1 (uno a uno) la clave
                                principal de cualquiera de las tablas involucradas pasara como clave foránea
                                (visitante) a la tabla contraria.</li>
                            <li>Cuando se tienen relaciones con tipo de correspondencia1:M (uno a muchos) la
                                clave principal de la tabla del lado de 1(uno) pasara como clave foránea a la tabla
                                de M (muchos).</li>
                            <li>Cuando se tienen relaciones con tipo correspondencia M:M (muchos a muchos) se
                                generara una nueva tabla que contendrá UNICAMENTE las dos claves principales
                                de las tablas involucradas.</li>
                        </ol>




                        <!-- Comments Form -->
                        <div class="card my-4">

                            <h5 class="card-header"> <button id='1' class='previous btn btn-success' type='button'>
            <span class="fa fa-arrow-circle-left"></span><a href="unidad2-1.php"> Anterior</a> </button> Leave a Comment: <button class='next btn btn-success chevron-right' type='button'> <a href="unidad2-3.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
