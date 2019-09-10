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

                            <a href="#">DISEÑO DE BASES DE DATOS RELACIONALES</a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p>Posted on January 1, 2018 at 12:00 PM</p>

                        <hr>
                        <h5> <a href="#"><b>DISEÑO DE BASES DE DATOS RELACIONALES</b></a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p class="lead" ALIGN="justify">El modelo relacional se basa en dos ramas de las matemáticas: la teoría de
                            conjuntos y la lógica de predicados de primer orden. El hecho de que el modelo relacional
                            esté basado en la teoría de las matemáticas es lo que lo hace tan seguro y robusto. Al
                            mismo tiempo, estas ramas de las matemáticas proporcionan los elementos básicos
                            necesarios para crear una base de datos relacional con una buena estructura, y
                            proporcionan las líneas que se utilizan para formular buenas metodologías de diseño.</p>

                        <p class="lead" ALIGN="justify">La teoría matemática proporciona la base para el modelo relacional y, por lo tanto, hace que el modelo sea predecible, fiable y seguro. La teoría describe los elementos básicos que
                            se utilizan para crear una base de datos relacional y proporciona las líneas a seguir para
                            construirla. El organizar estos elementos para conseguir el resultado deseado es lo que se
                            denomina diseño.</p>

                        <p class="lead" ALIGN="justify">En 1970, el modo en que se veían las bases de datos cambió por completo cuando E. F. Codd introdujo el modelo relacional. En aquellos momentos, el enfoque existente para la
                            estructura de las bases de datos utilizaba punteros físicos (direcciones de disco) para
                            relacionar registros de distintos ficheros. Codd demostró que estas bases de datos limitaban
                            en gran medida los tipos de operaciones que los usuarios podían realizar sobre los datos.</p>

                        <p class="lead" ALIGN="justify">El modelo relacional representa la segunda generación de los DBMS. En él, todos los datos están estructurados a nivel lógico como tablas formadas por filas y columnas, aunque
                            a nivel físico pueden tener una estructura completamente distinta. El modelo relacional,
                            como todo modelo de datos, tiene que ver con tres aspectos de los datos: Estructura de
                            datos, Integridad de datos, Manejo de datos.</p>

                        <hr>
                        <h5> <a href="#"><b>4.1 Definición del problema</b></a></h5>
                        <!-- Post Content -->
                        <hr>
                        <p class="lead" ALIGN="justify">Es el proceso por el que se determina la organización de una DB, incluidos su estructura, contenido y las aplicaciones que se han de desarrollar. Éste se considera ahora
                            una disciplina estable, con métodos y técnicas propios.</p>

                        <p class="lead" ALIGN="justify">Para definir correctamente lo primero es realizar diseño conceptual, que parte de las especificaciones de los requisitos del usuario y su resultado es el esquema conceptual de
                            la base de datos que corresponderá a un Modelo E / R. Un esquema conceptual es una
                            descripción de alto nivel de la estructura de la base de datos, independientemente del
                            DBMS que se vaya a utilizar para manipularla. Un modelo conceptual es un lenguaje que
                            se utiliza para describir esquemas conceptuales. El objetivo del diseño conceptual es
                            describir el contenido de los datos de la DB y no las estructuras de almacenamiento que se
                            necesitarán para manejar esta información. El modelo relacional puede considerarse como
                            un lenguaje de programación abstracto, orientado de manera específica hacia las
                            aplicaciones de bases de datos. En términos tradicionales una relación se asemeja a un
                            archivo, una tupla a un registro, y un atributo a un campo. Pero estas correspondencias son
                            aproximadas. Las características principales de los “archivos” relacionales son:</p>

                        <ul>
                            <li>Cada archivo contiene solo un tipo de registros.</li>
                            <li>Los campos no tienen un orden específico, de izquierda a derecha.</li>
                            <li>Los registros no tienen un orden específico, de arriba hacia abajo.</li>
                            <li>Cada campo tiene un solo valor.</li>
                            <li>Los registros poseen un campo identificador único llamado clave primaria.</li>
                        </ul>

                        <p class="lead" ALIGN="justify">Actualmente algunos de los manejadores de DB, utilizan un sistema de búsqueda con algoritmos de árboles. Pero las búsquedas que se pueden realizar con estos algoritmos son sólo para memoria principal. Los algoritmos implementados para realizar búsquedas con
                            listas salteadas o por bloques son eficientes para realizar búsquedas en memoria secundaria.</p>

                        <p class="lead" ALIGN="justify">El primer paso para la definición del diseño de una base de datos es la producción del esquema conceptual. Normalmente, se construyen varios esquemas conceptuales, cada
                            uno para representar las distintas visiones que los usuarios tienen de la información.</p>

                        <p class="lead" ALIGN="justify">A los esquemas conceptuales correspondientes a cada vista de usuario se les denomina esquemas conceptuales locales. Cada uno de estos esquemas se compone de
                            entidades, relaciones, atributos, dominios de atributos e identificadores. El esquema
                            conceptual también tendrá una documentación, que se irá produciendo durante su
                            desarrollo. Las tareas a realizar en el diseño conceptual son las siguientes:</p>

                        <ol>
                            <li>Identificar las entidades.</li>
                            <li>Identificar las relaciones.</li>
                            <li>Identificar los atributos y asociarlos a entidades y relaciones.</li>
                            <li>Determinar los dominios de los atributos.</li>
                            <li>Determinar los identificadores.</li>
                            <li>Determinar las jerarquías de generalización (si las hay).</li>
                            <li>Dibujar el diagrama entidad-relación.</li>
                            <li>Revisar el esquema conceptual local con el usuario.</li>
                        </ol>

                        <p class="lead" ALIGN="justify">El principal concepto del modelo ER es la entidad, que es una "cosa" en el mundo real con existencia independiente. Una entidad puede ser un objeto físico (una persona, un auto,
                            una casa o un empleado) o un objeto conceptual (una compañía, un puesto de trabajo o un
                            curso universitario). Cada entidad tiene propiedades específicas, llamadas atributos, que
                            la describen. Una entidad particular tiene un valor para cada uno de los atributos. Cada uno
                            de los atributos de una entidad posee un dominio, el que corresponde al tipo del atributo.</p>

                        <p class="lead" ALIGN="justify">Para todo conjunto de valores de una entidad, debe existir un atributo o combinación de atributos, que identifique a cada entidad en forma única el cual se denomina llave (primaria). Una relación se puede definir como una asociación entre entidades. Una relación también
                            puede tener atributos.</p>


                        <center>
                            <img class="img-fluid rounded" src="../images/dfd.PNG" alt="">
                        </center>
                        <hr>

                        <p class="lead" ALIGN="justify"><b><u>Tipos de relaciones</u></b></p>


                        <p class="lead" ALIGN="justify">Un tipo de relación es un subconjunto del producto cartesiano E1 x E2 x ... x.En. Un tipo de relación podría también interpretarse como un conjunto de pares ordenados, en este
                            caso: (e1, d1), (e2, d2), (e3, d1), (e4, d2). Según el número de entidades relacionadas (o
                            razón de cardinalidad), se pueden definir tres tipos de relaciones:</p>

                        <ol>
                            <li><b>Relaciones Uno a Uno (1:1).</b> Una entidad A está asociada a lo más con una entidad
                                B, y una entidad B a lo más con una entidad A. Ejemplo: "Ser jefe de" es una relación
                                1:1 entre las entidades empleado y departamento.</li>
                            <li><b>Relaciones Uno a Muchos (1:n).</b> Una entidad A está asociada con una o varias
                                entidades B. Una entidad B, sin embargo, puede estar a lo más asociada con una
                                entidad A. Ejemplo: "Ser profesor" es una relación 1:n entre profesor y curso,
                                suponiendo que un curso sólo lo dicta un profesor.</li>
                            <li><b>Relaciones Muchos a Muchos (n:m).</b> Una entidad A está asociada con una o varias
                                entidades B, y una entidad B está asociada con una o varias entidades A. Ejemplo:
                                "Estar inscrito" es una relación n:m entre las entidades alumno y curso.</li>
                        </ol>

                        <p class="lead" ALIGN="justify"><u><b>Tipos de atributos</b></u></p>
                        <ul>
                            <li>de atributos
                                 Atributos compuestos se pueden dividir en sub-partes más pequeñas, que
                                representan atributos más básicos con significados propios. Por ejemplo, una
                                "dirección" puede sub-dividirse en: dir-calle, colonia, ciudad, región.</li>
                            <li>Atributos no sub-dividibles se llaman atómicos o simples. Si no hay necesidad de
                                referirse a los elementos individuales de una dirección, entonces la dirección
                                completa puede considerarse un atributo simple, tienen un sólo valor para una
                                entidad particular.</li>
                            <li>Atributos multivalorados pueden tener un conjunto de valores para una misma
                                entidad. Eje.: "títulos profesionales" (una persona puede tener uno, dos o más).</li>
                        </ul>


                        <p class="lead" ALIGN="justify">En algunos casos una entidad particular puede no tener valores aplicables para un atributo. Para estas situaciones tenemos un valor especial llamado nulo. También, si no se
                            conoce el valor. Un tipo de entidad define un conjunto de entidades con los mismos
                            atributos. En los diagramas E-R, un tipo de entidad se representa como una caja
                            rectangular, los nombres de los atributos como elipses y las relaciones como rombos. Los
                            atributos multivalorados se representan con elipses dobles.</p>

                        <p class="lead" ALIGN="justify">Un tipo de atributo usualmente tiene un atributo cuyos valores son distintos para cada entidad individual (atributo clave o llave) y sus valores se usan para identificar cada entidad
                            unívocamente. Cada atributo simple tiene un conjunto de valores o dominio asociado, que
                            especifica el conjunto de valores que puede asignarse a cada entidad individual.</p>

                        <p class="lead" ALIGN="justify">Este modelo considera la DB como una colección de relaciones. De manera simple, una
                            relación representa una tabla, en que cada fila representa una colección de valores que
                            describen una entidad del mundo real. Cada fila se denomina tupla.</p>


                        <h6 class="#" ALIGN="justify"><b><u>Dominios, tuplas, atributos, relaciones</u></b></h6>
                        <ul>
                            <li>Un dominio D es un conjunto de valores atómicos. Atómico quiere decir que cada
                                valor en el dominio es indivisible. Es útil dar nombres a los dominios.</li>
                            <li>RUTs: números de 8 dígitos más un carácter que puede ser del 0 al 9 o K Nombres:
                                el conjunto de nombres de personas Notas: valores entre 1.0 y 7.0.</li>
                            <li>Un esquema de relación R, denotado R(A1, A2, ..., An) está constituido por un
                                nombre de relación R y una lista de atributos A1, ..., An. Se usa para describir una
                                relación. R es el nombre de esta relación. El grado de una relación es el número n
                                de atributos del esquema de la relación.</li>
                            <li>Una instancia de relación refleja sólo las tuplas válidas que representa un estado
                                particular del mundo real. A medida que este cambia, también lo hace la relación,
                                transformándose en otro estado de relación.</li>
                            <li>Notación Las letras Q, R, S denotan nombres de relación, las letras q, r, s denotan
                                estados de relación, las letras t, u, v denotan tuplas. Los nombres de atributos se
                                califican con el nombre de relación a la cual pertenecen.</li>
                        </ul>
                        <hr>

                        <p class="#" ALIGN="justify"><b><u>Restricciones</u></b></p>

                        <p class="#" ALIGN="justify">Las restricciones de dominios especifican que el valor de cada atributo A debe ser un valor atómico del dominio dom(A). Una relación se define como un conjunto de tuplas. Por
                            definición todos los elementos de un conjunto son distintos. Luego todas las tuplas de una
                            relación deben ser distintas. Esto implica que dos tuplas no pueden tener la misma
                            combinación de valores para todos sus atributos. Pero puede haber otros subconjuntos de
                            atributos de un esquema de relación R con la propiedad de que no haya dos tuplas en una
                            instancia de relación r de R que tengan la misma combinación de valores para esos
                            atributos.</p>

                        <p class="#" ALIGN="justify">El valor de un atributo clave se usa para identificar unívocamente una tupla en una relación. El hecho que un conjunto de atributos constituya una clase es una propiedad del
                            esquema de la relación, y es invariante en el tiempo.</p>

                        <p class="#" ALIGN="justify">En general, un esquema de relación puede tener más de una clave, y en ese caso, cada una de las llaves es una llave candidata. Una de las llaves candidatas se designa como
                            llave primaria de la relación. Usamos la convención de que los atributos que forman la llave
                            primaria de un esquema de relación se subrayan.</p>

                        <p class="#" ALIGN="justify"><b><u>Base de datos relacional</u></b></p>

                        <p class="#" ALIGN="justify">Es un conjunto de esquemas de relación S = (R1, R2, ..., Rm) y un conjunto RI de
                            restricciones de integridad.</p>

                        <p class="#" ALIGN="justify">Una instancia de DB relacional DB de S es un conjunto de instancias de relación DB = {r1, ..., rn} tal que cada ri es una instancia de Ri y tal que las relaciones ri satisfacen las
                            restricciones de integridad especificadas en RI.</p>

                        <p class="#" ALIGN="justify">La restricción de integridad de entidad establece que ningún valor de llave primaria puede ser nulo. Esto es porque ellas identifican tuplas de la relación.</p>

                        <p class="#" ALIGN="justify">La restricción de integridad referencial se especifica entre dos relaciones y se usa para mantener la consistencia entre tuplas de las dos relaciones. Informalmente, una tupla
                            en una relación que hace referencia a otra relación debe referirse a una tupla existente en
                            esa relación.</p>

                        <p class="#" ALIGN="justify"><b><u>Operaciones de actualización</u></b></p>

                        <p class="#" ALIGN="justify">La operación Insert provee una lista de valores de atributos para una nueva tupla t
                            que se va a insertar en una relación. El DBMS puede hacer dos opciones cuando hay
                            violación de restricciones. Una es rechazar la inserción. La otra es intentar corregir la razón
                            de rechazo de la inserción.</p>

                        <p class="#" ALIGN="justify"><b><u>Operaciones de borrado</u></b></p>

                        <p class="#" ALIGN="justify">La operación Delete borra tuplas de una relación. Es posible que se viole la
                            integridad referencial cuando una tupla que se quiere borrar es referenciada por las llaves
                            foráneas de otras tuplas de la BD. Las tuplas a borrar se especifican a través de condiciones
                            sobre los atributos de la relación. Hay tres opciones con respecto a una operación de
                            borrado que causa una violación. La primera es rechazar la operación. La segunda es
                            intentar propagar el borrado. Una tercera opción es modificar los valores de los atributos
                            referenciantes que causan la violación (cada uno de estos valores puede ser puesto en nulo o cambiado para referenciar otra tupla válida). Hay que observar que si un atributo referenciante que causa una violación, es parte de la llave primaria, no puede ser nulo, pues
                            se violaría la integridad de entidad.</p>

                        <p class="#" ALIGN="justify"><b><u>Operaciones de modificación</u></b></p>

                        <p class="#" ALIGN="justify">La operación Modify se usa para cambiar valores a uno o más atributos en una tupla
                            (o tuplas) de una relación R. Es necesario especificar una condición sobre los atributos de
                            R para seleccionar la o las tuplas a modificar. El modificar un atributo que no es llave
                            primaria ni llave foránea no tiene problemas. El modificar una llave primaria es similar a
                            borrar una tupla e insertar otra en su lugar. Por tanto, es relevante la discusión anterior
                            (Insert y Delete). Si se modifica un atributo de una llave foránea, el DBMS debe asegurarse
                            que el nuevo valor se refiere a una tupla existente en la relación referenciada.</p>

                        <center>
                            <img class="img-fluid rounded" src="../images/tre.PNG" alt="">
                        </center>

                        <ul>
                            <li>Clave Primaria = clave candidata elegida</li>
                            <li>Clave Ajena = clave externa o clave foránea</li>
                            <li>Clave Alternativa = clave secundaria</li>
                            <li>Dependencia Multivaluada = dependencia multivalor</li>
                            <li>RDBMS = Del inglés Relational Data Base Manager System que significa, SistemaGestor de Bases de Datos
                                Relacionales</li>
                            <li>1FN = Significa, Primera Forma Normal o 1NF del inglés First Normal Form.</li>
                            <li>Relación = tabla o archivo</li>
                            <li>Tupla = registro, fila o renglón</li>
                            <li>Atributo = columna o campo</li>
                            <li>Clave = llave o código de identificación</li>
                            <li>Clave Candidata = superclave mínima</li>
                        </ul>


                        <p class="#" ALIGN="justify">Los términos Relación, Tupla y Atributo derivan de las matemáticas relacionales,
                            que constituyen la fuente teórica del modelo de base de datos relacional. Todo atributo en
                            una tabla tiene un dominio, el cual representa el conjunto de valores que el mismo puede
                            tomar. Una instancia de una tabla puede verse entonces como un subconjunto del producto
                            cartesiano entre los dominios de los atributos. Finalmente, una tupla puede razonarse
                            matemáticamente como un elemento del producto cartesiano entre los dominios.</p>

                        <hr>
                        <h5> <a href="#"><b>4.2 Solución de Problemas</b></a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p class="#" ALIGN="justify"><b><u>Redundancia e inconsistencia de datos.</u></b></p>

                        <p class="#" ALIGN="justify">Puesto que los archivos que mantienen almacenada la información son creados por
                            diferentes tipos de programas de aplicación existe la posibilidad de que si no se controla
                            detalladamente el almacenamiento, se pueda originar un duplicado de información, es decir
                            que la misma información sea más de una vez en un dispositivo de almacenamiento. Esto
                            aumenta los costos de almacenamiento y acceso a los datos, además de que puede originar
                            la inconsistencia de los datos - es decir diversas copias de un mismo dato no concuerdan
                            entre sí.</p>

                        <p class="#" ALIGN="justify"><b><u>Dificultad para tener acceso a los datos.</u></b></p>

                        <p class="#" ALIGN="justify">Un sistema de base de datos debe contemplar un entorno de datos que le facilite al usuario el manejo de los mismos.</p>

                        <p class="#" ALIGN="justify"><b><u>Aislamiento de los datos.</u></b></p>

                        <p class="#" ALIGN="justify">Puesto que los datos están repartidos en varios archivos, y estos no pueden tener
                            diferentes formatos, es difícil escribir nuevos programas de aplicación para obtener los datos apropiados.</p>

                        <p class="#" ALIGN="justify"><b><u>Anomalías del acceso concurrente.</u></b></p>

                        <p class="#" ALIGN="justify">Para mejorar el funcionamiento global del sistema y obtener un tiempo de respuesta
                            más rápido, muchos sistemas permiten que múltiples usuarios actualicen los datos
                            simultáneamente. En un entorno así la interacción de actualizaciones concurrentes puede
                            dar por resultado datos inconsistentes. Para prevenir esta posibilidad debe mantenerse
                            alguna forma de supervisión en el sistema.</p>

                        <p class="#" ALIGN="justify"><b><u>Problemas de seguridad.</u></b></p>

                        <p class="#" ALIGN="justify">La información de toda empresa es importante, aunque unos datos lo son más que
                            otros, por tal motivo se debe considerar el control de acceso a los mismos, no todos los
                            usuarios pueden visualizar alguna información, por tal motivo para que un sistema de base
                            de datos sea confiable debe mantener un grado de seguridad que garantice la
                            autentificación y protección de los datos.</p>

                        <p class="#" ALIGN="justify"><b><u>Problemas de integridad.</u></b></p>

                        <p class="#" ALIGN="justify">Los valores de datos almacenados en la base de datos deben satisfacer cierto tipo
                            de restricciones de consistencia. Estas restricciones se hacen cumplir en el sistema
                            añadiendo códigos apropiados en los diversos programas de aplicación. Lo anterior es
                            originado por:</p>
                        
                        <ul>
                            <li>Redundancia</li>
                            <li>Anomalías
                            <ol>
                                <li> Actualización</li>
                                <li>Inserción</li>
                                <li>Borrado</li>
                            </ol>
                            </li>
                        </ul> 
                <p class="#" ALIGN="justify"><b>Creadas durante:</b></p>  
                           <ul>
                               <li>Mantenimiento</li>
                               <li>Creación</li>
                               <li>Modificación</li>
                           </ul>                
                            
             <p class="#" ALIGN="justify"><b>Donde la Solución es:</b></p>  
                           <ul>
                               <li> Normalización</li>
                              
                           </ul>                




                        <!-- Comments Form -->
                        <div class="card my-4">

                            <h5 class="card-header"> <button id='1' class='previous btn btn-success' type='button'>
                                    <span class="fa fa-arrow-circle-left"></span><a href="unidad2-4.php"> Anterior</a> </button>Leave a Comment: <button class='next btn btn-success chevron-right' type='button'> <a href="../unidad3/unidad3-1.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
