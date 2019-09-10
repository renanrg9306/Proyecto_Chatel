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


                        <h5> <a href="#">TIPOS DE USUARIOS</a></h5>
                        <!-- Post Content -->
                        <hr>
                        <p ALIGN="justify"><b>A.Usuarios informáticos:</b> tienen a su cargo tareas de creación y mantenimiento de la BD,  así como la realización de procedimientos y programas que necesiten los usuarios finales. </p>

                        <p ALIGN="justify">Se clasifican en:</p>

                        <p ALIGN="justify"><b>Diseñadores:</b> tienen la responsabilidad de identificar los datos que han de estar    contenidos en la BD, así como determinar las estructuras más apropiadas para satisfacer las necesidades de los usuarios. Según la fase donde intervienen, se clasifican en: 
                        </p>
                            <p ALIGN="justify"><b>•	Diseñadores lógicos: </b>mantienen constantes entrevistas con los usuarios a fin de que la BD   represente lo más fielmente posible el mundo real que trata de recoger, ya que deben decidir qué tipos de datos, van a estar contenidos en la BD. Persiguen un objetivo de  eficacia de la BD.</p>
                            
                            <p ALIGN="justify"><b>•	Administradores: </b>Su misión es la vigilancia y gestión de los datos para que no se destruyan ni contaminen, perdiendo su confidencialidad, disponibilidad e integridad. El administrador es el responsable de establecer el sistema de autorizaciones de acceso y deberá coordinar y controlar su uso. Deberá ocuparse del buen funcionamiento de todo el sistema, sin que se produzcan paradas, de modo que se proporcionen los tiempos adecuados de respuesta.</p>
                            
                            <p ALIGN="justify"><b>•	Analistas y programadores: </b>tienen a su cargo el análisis y la programación de las tareas que no pueden ser llevadas a cabo por los usuarios finales, para lo cual desarrollan procedimientos y programas que ponen a disposición de los usuarios finales con el propósito de facilitarles su trabajo</p>

                        <p ALIGN="justify"><b>B.Usuarios finales: </b>son aquellos que tienen que acceder a los datos porque los necesitan    para llevar a cabo su actividad, se les puede clasificar en:</p>
                        
                            <p ALIGN="justify"><b>•	Habituales: </b>suelen hacer consultas y/o actualizaciones en la BD como parte cotidiana de  su trabajo. Utilizan por lo regular menús preparados por analistas y/o programadores para facilitarles su interrelación con la computadora. Dentro de este grupo se distingue a los capturistas, cuya labor consiste en actualizar la BD.</p>
                            
                            <p ALIGN="justify"><b>•	Esporádicos:  </b>usuarios que no hacen un uso cotidiano de la computadora, pero es posible    que requieran información diferente en cada ocasión. Suelen ser gerentes de nivel medio    o alto.</p>
                            
                            <p ALIGN="justify"><b>•	Simples o paramétricos: </b>realizan transacciones programadas, su trabajo es de consultas y    actualizaciones constantes de la BD, por ejemplo, encargados de reservaciones de líneas    aéreas, hoteles y compañías de alquiler de automóviles; los cajeros bancarios, etc.</p>
                            
                            <p ALIGN="justify"><b>•	Autónomos:</b> emplean BD personalizadas gracias a los paquetes comerciales que cuentan    con interfaces de fácil uso, basadas en menús o en gráficos. En estos se encuentran los    usuarios de paquetes fiscales que almacenan diversos datos financieros personales para    fines fiscales, entre otros.</p>


                       <hr>
                                       
                        <h5> <a href="#">REQUERIMIENTOS DE CONSTRUCCIÓN</a></h5>
                        <!-- Post Content -->
                        <hr>
                        
                           <center>
                            <img class="img-fluid rounded" src="../images/nbdu1.jpg" alt="">
                        </center>
                        <hr>
                        
                        <p ALIGN="justify">ANSI/X3/SPARC es un grupo de estudio delStandardPlanningand requirements Committee(SPARC) perteneciente al ANSI(American National Standards Institute),y dentro de éste se encuentra el comité X3 que se encarga de las estandarizaciones de computadoras e informática. Este comité define que la arquitectura a tres niveles tiene como objetivo formar una separación entre las aplicaciones del usuario (nivel externo) y la BD física (nivel interno), incluyendo para ello el nivel conceptual.</p>

                        <p ALIGN="justify">El nivel externo o de vistas incluye varios esquemas externos o vistas de usuario. 
                        Cada esquema externo describe la parte de la base de datos que interesa a un grupo de usuarios determinado y le oculta el resto de la base de datos.
                        </p>

                        <p ALIGN="justify">El nivel conceptual tiene un esquema conceptual, que describe la estructura de toda la base de datos para la comunidad de usuarios. El esquema conceptual oculta los detalles de las estructuras físicas de almacenamiento y se concentra en describir entidades, tipos de datos, vínculos, operaciones de los usuarios y restricciones.
                        </p>

                        <p ALIGN="justify">El nivel interno tiene un esquema interno que describe la estructura física de almacenamiento de la base de datos, este esquema emplea un modelo físico de los datos y describe todos los detalles para su almacenamiento así como los caminos de acceso para la base de datos.</p>
                        
                             <hr>
                        
                           <center>
                            <img class="img-fluid rounded" src="../images/ebdu1.jpg" alt="">
                        </center>
                        <hr>
                        
                           <h5> <a href="#">MODELO DE DATOS</a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p ALIGN="justify">Se puede definir como “un conjunto de conceptos, reglas y convenciones que nos permiten describir y manipular (consultar y actualizar) los datos de un cierto mundo real que deseamos almacenar en la base de datos”.</p>

                        <p ALIGN="justify">Es un conjunto de conceptos que permiten describir a distintos niveles de abstracción, la estructura de la BD, a la cual denominamos esquema. Según el nivel de  abstracción, el modelo que permite su descripción será externo, global o interno, cada uno de los cuales ofrece distintos elementos de descripción. Los modelos externos nos permiten representar los datos que necesita cada usuario, en particular con las estructuras propias del lenguaje de programación que va a emplear. Los modelos globales ayudan a describir los datos para el conjunto de usuarios, esto es, la información a nivel de empresa; y por último, los modelos internos (también llamados físicos) están orientados a la máquina, siendo sus elementos de descripción punteros, índices, etc.</p>

                        <p ALIGN="justify">Los modelos de datos son un eficaz instrumento en el diseño de bases de datos.
                        </p>
                             <p ALIGN="justify"><b>Modelo externo: </b>Punto de vista de cada usuario en particular. Eficiencia humana.</p>
                             <p ALIGN="justify"><b>Modelo global:</b> punto de vista del conjunto de usuarios (empresa). Eficiencia informativa.</p>                       
                             <p ALIGN="justify"><b>Conceptual: </b>enfocados a describir el mundo real con independencia de la computadora..</p>
                            <p ALIGN="justify"><b>Convencionales o Lógicos: </b>Convencionales o Lógicos: también llamados modelos de BD. Implementados en SGBD.</p>
                                <p ALIGN="justify">•	Jerárquico.</p>
                            <p ALIGN="justify">•	CODASYL (Red).</p>
                               <p ALIGN="justify">•	Relacional.</p>
                             <p ALIGN="justify"><b>Modelo interno: </b>Modelo interno: punto de vista de la computadora. Eficiencia de los recursos informáticos..</p>
                             
                             
                        <center>
                            <img class="img-fluid rounded" src="../images/mdbdu1.png" alt="">
                        </center>
                        <hr>
                        <p ALIGN="justify">El SGBD no interpreta los conceptos del esquema conceptual, por lo cual es necesario pasar a una descripción en términos propios del SGBD, para almacenar los datos necesarios en la estructura física previamente definida, donde tendremos cadenas de bits, totalmente carentes de significado si no disponemos de los medios que nos permitan recorrer el camino inverso, pasando de nuevo al mundo real con ayuda del lenguaje de manipulación, por medio del cual actualizaremos o recuperaremos los datos almacenados en la base, reincorporándoles su contenido semántico y obteniendo la información que necesita el usuario.
                        Las herramientas CASE proporcionan una importante ayuda en el diseño de BD, al disponer de modelos de datos semánticos (en general basados en el modelo E/R) que facilitan el diseño conceptual y realizan la transformación al modelo relacional propio de los productos comerciales más extendidos.
                        </p>
                        
                        <p ALIGN="justify"> A continuación se presenta el proceso para diseñar bases de datos:</p>
                                 
                              <p ALIGN="justify">•Obtener el esquema conceptual.</p>
                            <p ALIGN="justify">•Aplicando reglas del modelo de datos propio del SGBD que se va a utilizar, se obtiene el esquema lógico (también llamado esquema de base de datos).</p>
                             <p ALIGN="justify"><b>•Definir el esquema interno, donde el objetivo es conseguir la máxima eficiencia de frente a la computadora y al problema específico.</b></p>
                             <p ALIGN="justify">•Implementación de la base de datos física en los soportes secundarios.</p>
                             <p ALIGN="justify">•	La estructura física se ha de rellenar con los valores (ocurrencias o instancias) que se obtienen por observación de los sucesos del mundo real.</p>
                             
                             <p ALIGN="justify">Se puede considerar que los usuarios, en la arquitectura a tres niveles, están aislados de los datos almacenados físicamente en la máquina por las pantallas X1 y X2 (como se observa en la figura siguiente), que representan dos funciones de correspondencia. La primera, que representa la independencia lógica, realiza la transformación de la estructura conceptual (EC) a los esquemas externos (EE) y la segunda, que representa la independencia física, realiza la transformación del esquema interno (EI) al conceptual.</p>
                             
                                    <hr>   
                        <center>
                            <img class="img-fluid rounded" src="../images/enbd1.png" alt="">
                        </center>
                       
                            <hr>
                            
                            <p ALIGN="justify">El concepto de independencia de datos es complejo y difícil de delimitar y tampoco es fácil diferenciarlo de flexibilidad, versatilidad y otros conceptos estrechamente relacionados con él. Implica la separación entre el almacenamiento y la organización lógica de los datos tal como éstos se contemplan por los distintos programas de aplicación que hacen uso de la base de datos, con lo que se consigue:</p>
                          
                           <p ALIGN="justify"><b>1.</b>Unos mismos datos se presentarán de distintas formas según las necesidades de los usuarios.</p>
                            <p ALIGN="justify"><b>2.</b>El almacenamiento de los datos, su estructura lógica y los programas de aplicación serán independientes unos de otros, de modo que un cambio en uno de ellos no obliga a modificar los demás.</p>
                             <p ALIGN="justify">La independencia de los datos es la capacidad de un SGBD para permitir que las referencias a los datos almacenados, especialmente en los programas y en sus descripciones de datos, estén aisladas de los cambios y de los diferentes usos en el entorno de datos, como pueden ser; la forma como se almacenan dichos datos, el modo de compartirlos con otros programas y cómo se reorganizan para mejorar el rendimiento del sistema de base de datos.</p>
                             
                              <p ALIGN="justify">La independencia de descripción permite separar la definición de los datos a nivel físico y a nivel lógico, mientras que la independencia de manipulación se refiere a los programas de aplicación con respecto a los caminos de acceso y al soporte físico donde se almacenan los datos.
                                Entre las interfaces de usuario que ofrecen los SGBD están:
                                </p>
                                <p ALIGN="justify"><b>•	Basadas en menús:</b> Presentan al usuario listas de opciones, llamadas menús, que guían al usuario para formular solicitudes. Los menús hacen innecesario memorizar las ordenes y la sintaxis específica de un lenguaje de consulta.</p>
                            <p ALIGN="justify"><b>•	Gráficas: </b> Suelen presentar al usuario esquemas en forma de diagrama para que se especifique la consulta manipulando el diagrama. En muchos casos las interfaces gráficas se combinan con las de menús. Casi todas estas interfaces se valen de un dispositivo apuntador como el ratón (mouse).</p>
                             <p ALIGN="justify"><b>•	Basadas en formas: </b>Presentan una forma a cada usuario, éste llena todos los espacios de la forma para insertar datos nuevos, o bien llenar sólo ciertos espacios. Las formas suelen diseñarse y programarse para los usuarios simples como interfaces de transacciones programadas. Muchos SGBD cuentan con los lenguajes de especificación de formas, con los que los programadores pueden especificar dichas formas.</p>
                                <p ALIGN="justify"><b>•	Lenguaje natural: </b>Aceptan solicitudes escritas en inglés o en algún otro idioma e intentan “entenderlas”. La interfaz consulta las palabras de su esquema y también un conjunto de palabras estándar, para interpretar la solicitud. Si la interpretación tiene éxito, la interfaz genera una consulta de alto nivel que corresponde a la solicitud en lenguaje natural y la envía la SGBD para su procesamiento; en caso contrario, se inicia un diálogo con el usuario para esclarecer la solicitud.</p>
                            <p ALIGN="justify"><b>•	Usuarios paramétricos. </b>Estos usuarios, a los que pertenecen los cajeros de un banco, a menudo tienen un conjunto pequeño de operaciones que deben realizar repetidamente. Los analistas de sistemas y los programadores diseñan e implementan una interfaz especial donde se incluye un conjunto reducido de órdenes abreviadas, con el fin de reducir al mínimo el número de digitaciones requeridas para cada solicitud, como por ejemplo: programar teclas de funciones.</p>
                             <p ALIGN="justify"><b>•	Los sistemas de bases de datos</b> contienen órdenes privilegiadas que sólo el personal del DBA (Administrador de Base de Datos) puede utilizar. Entre ellas están las órdenes para crear cuentas, establecer los parámetros del sistema, otorgar autorizaciones a las cuentas, modificar los esquemas y reorganizar la estructura de almacenamiento de una base de datos.</p>
                             
                              <p ALIGN="justify">La independencia físico/lógica ha permitido algunos cambios como son:</p>
                              <p ALIGN="justify"><b>1.	Cambios en aspectos lógicos:</b></p>
                                    <p ALIGN="justify"><b>•	En los campos:</b> Cambios en el nombre, tamaño, tipo, modo de cálculo, contraseñas, etc. Además, a nivel externo, pueden producirse cambios en la presentación de los datos.</p>
                                      <p ALIGN="justify"><b>•	En los registros:</b> Cambios en los nombres, introducción de nuevos campos, borrado de los mismos, alteración del orden en que aparecen los campos de un registro, división de un tipo de registro en dos (normalización), unión de dos tipos de registro en uno, contraseñas, etc.</p>
                        <p ALIGN="justify"><b>2.	Cambios en aspectos físicos:</b></p>
                              <p ALIGN="justify">•	Tamaño de bloques, longitud de los registros almacenados, pasar los registros de longitud fija a longitud variable, métodos de direccionamiento, tratamiento de desbordamientos, inserciones y eliminaciones, ubicación de los conjuntos de datos en diferentes volúmenes, introducir o borrar índices, cambiar o introducir técnicas de compactación, cambiar o introducir técnicas criptográficas, determinar la longitud de las pistas, número de pistas/cilindro, sistema operativo, dirección de dispositivos, etc.</p>
                              
                              
                               <p ALIGN="justify">En la siguiente figura se muestra el núcleo del SGBD, que está en mayor o menor medida soportado por el sistema operativo; sobre este núcleo se sitúa el diccionario (llamado también catálogo o metabase). El conjunto de herramientas y facilidades que aparecen en la figura facilitan el acceso a los datos, sea directamente (facilidades de usuario), o mediante las aplicaciones desarrolladas por los informáticos con la ayuda de generadores de aplicaciones, precompiladores, etc.</p>
                             
                               <center>
                            <img class="img-fluid rounded" src="../images/nbdu1.png" alt="">
                        </center>
                          <p ALIGN="justify">Otros componentes (como las utilidades y el exportador / importador) facilitan las tareas del administrador o ayudan a realizar el diseño de la base de datos (herramientas CASE (Computer Aided Software Engineering – Ingenieria de Sistemas Asistida por Computadora).</p>
                   
                        <!-- Comments Form -->
                        <div class="card my-4">
                            <h5 class="card-header">
        <button id='1' class='previous btn btn-success' type='button'>
            <span class="fa fa-arrow-circle-left"></span><a href="unidad1-2.php"> Anterior</a> </button> Leave a Comment:<button  class='next btn btn-success chevron-right' type='button'> <a href="unidad1-4.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
