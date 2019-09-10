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

                            <a href="#">MODELO DE DATOS RELACIONAL</a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p>Posted on January 1, 2018 at 12:00 PM</p>

                        <hr>
                        <h5> <a href="#"><b>3.2 Representación graficas</b></a></h5>
                        <!-- Post Content -->
                        <hr>

                        <p class="lead" ALIGN="justify">El primer paso en el diseño de una base de datos es la producción del esquema
                            conceptual. Normalmente, se construyen varios esquemas conceptuales, cada uno para
                            representar las distintas visiones que los usuarios tienen de la información. Cada una de
                            estas visiones suelen corresponder a las diferentes áreas funcionales de la empresa.</p>

                        <p class="lead" ALIGN="justify">El primer paso en el diseño de una base de datos es la producción del esquema
                            conceptual. Normalmente, se construyen varios esquemas conceptuales, cada uno para
                            representar las distintas visiones que los usuarios tienen de la información. Cada una de
                            estas visiones suelen corresponder a las diferentes áreas funcionales de la empresa.</p>

                        <p class="lead" ALIGN="justify">A los esquemas conceptuales correspondientes a cada vista de usuario se les
                            denomina esquemas conceptuales locales. Cada uno de estos esquemas se compone
                            de entidades, relaciones, atributos, dominios de atributos e identificadores. El esquema
                            conceptual también tendrá una documentación, que se irá produciendo durante su
                            desarrollo. Las tareas a realizar en el diseño conceptual son las siguientes:</p>
                        <ol>

                            <li> <a href="#"><b><u>Identificar las entidades:</u></b></a></li>
                            <!-- Post Content -->

                            <p class="#" ALIGN="justify">En primer lugar hay que definir los principales objetos que interesan al usuario. Estos objetos serán las entidades. Una forma de identificar las entidades es examinar las
                                especificaciones de requisitos de usuario. En estas especificaciones se buscan los nombres
                                o los sintagmas nominales que se mencionan. Otra forma de identificar las entidades es
                                buscar aquellos objetos que existen por sí mismos. Siempre que sea posible, el usuario
                                debe colaborar en la identificación de las entidades.</p>

                            <p class="#" ALIGN="justify">Los nombres de las entidades y sus descripciones se anotan en el diccionario de
                                datos. Si una entidad se conoce por varios nombres, éstos se deben anotar en el diccionario
                                de datos como alias o sinónimos.</p>

                            <li> <a href="#"><b><u>Identificar las relaciones</u></b></a></li>
                            <!-- Post Content -->

                            <p class="#" ALIGN="justify">Una vez definidas las entidades, se deben definir las relaciones existentes entre ellas. Para identificar las relaciones se suelen buscar las expresiones verbales. Si las
                                especificaciones de requisitos reflejan estas relaciones es porque son importantes para la
                                empresa y, por lo tanto, se deben reflejar en el esquema conceptual. Pero sólo interesan
                                las relaciones que son necesarias.</p>

                            <p class="#" ALIGN="justify">Hay que determinar la cardinalidad mínima y máxima con la que participa cada
                                entidad en cada una de ellas. Es un tipo de restricción que se utiliza para comprobar y
                                mantener la calidad de los datos. Conforme se van identificando las relaciones, se les van
                                asignando nombres que tengan significado para el usuario. En el diccionario de datos se
                                anotan los nombres de las relaciones, su descripción y las cardinalidades con las que
                                participan las entidades en ellas.</p>

                            <li> <a href="#"><b><u>Identificar los atributos y asociarlos a entidades y relaciones</u></b></a></li>
                            <!-- Post Content -->

                            <p class="#" ALIGN="justify">Son atributos los nombres que identifican propiedades, cualidades, identificadores o
                                características de entidades o relaciones. En ocasiones, será necesario preguntar a los
                                usuarios para que aclaren los requisitos.</p>

                            <p class="#" ALIGN="justify">Al identificar los atributos, hay que tener en cuenta si son simples o compuestos. Si el
                                usuario no necesita acceder a cada uno de los componentes de la dirección por separado,
                                se puede representar como un atributo simple. Pero si el usuario quiere acceder a los
                                componentes de forma individual, entonces se debe representar como un atributo
                                compuesto.</p>

                            <p class="#" ALIGN="justify">También se deben identificar los atributos derivados o calculados, que son aquellos cuyo valor se puede calcular a partir de los valores de otros atributos.</p>

                            <p class="#" ALIGN="justify">Conforme se van identificando los atributos, se les asignan nombres que tengan significado para el usuario. De cada atributo se debe anotar la siguiente información:</p>

                            <ul>
                                <li>Nombre y descripción del atributo.</li>
                                <li>Alias o sinónimos por los que se conoce al atributo.</li>
                                <li>Tipo de dato y longitud.</li>
                                <li>Valores por defecto del atributo (si se especifican).</li>
                                <li>Si el atributo siempre va a tener un valor (si admite o no nulos).</li>
                                <li>Si el atributo es compuesto y, en su caso, qué atributos simples lo forman.</li>
                                <li>Si el atributo es derivado y, en su caso, cómo se calcula su valor.</li>
                                <li>Si el atributo es multievaluado.</li>
                            </ul>

                            <li> <a href="#"><b><u>Determinar los dominios de los atributos</u></b></a></li>
                            <!-- Post Content -->

                            <p class="#" ALIGN="justify">Es el conjunto de valores que puede tomar el atributo. Un esquema conceptual está completo si incluye los dominios de cada atributo: los valores permitidos para cada atributo,
                                su tamaño y su formato. También se puede incluir información adicional sobre los dominios.
                                Toda la información sobre los dominios se debe anotar en el diccionario de datos.</p>

                            <li> <a href="#"><b><u>Determinar los identificadores</u></b></a></li>
                            <!-- Post Content -->

                            <p class="#" ALIGN="justify">Cada entidad tiene al menos un identificador. En este paso, se trata de encontrar todos los identificadores de cada una de las entidades. Los identificadores pueden ser
                                simples o compuestos. De cada entidad se escogerá uno de los identificadores como clave
                                primaria en la fase del diseño lógico.</p>

                            <p class="#" ALIGN="justify">Cuando se determinan los identificadores es fácil darse cuenta de si una entidad es fuerte o débil. Si una entidad tiene al menos un identificador, es fuerte, si una entidad no
                                tiene atributos que le sirvan de identificador, es débil.</p>

                            <li> <a href="#"><b><u>Determinar las jerarquías de generalización</u></b></a></li>
                            <!-- Post Content -->

                            <p class="#" ALIGN="justify">En este paso hay que observar las entidades que se han identificado hasta el
                                momento. Hay que ver si es necesario reflejar las diferencias entre distintas ocurrencias de
                                una entidad, con lo que surgirán nuevas subentidades de esta entidad genérica; o bien, si
                                hay entidades que tienen características en común y que realmente son subentidades de
                                una nueva entidad genérica. En cada jerarquía hay que determinar si es total o parcial y
                                exclusiva o superpuesta.</p>

                            <li> <a href="#"><b><u>Dibujar el diagrama entidad-relación</u></b></a></li>
                            <!-- Post Content -->

                            <p class="#" ALIGN="justify">Una vez identificados todos los conceptos, se puede dibujar el diagrama entidadrelación correspondiente a una de las vistas de los usuarios. Se obtiene así un esquema
                                conceptual local.</p>

                            <li> <a href="#"><b><u>Revisar el esquema conceptual local con el usuario</u></b></a></li>
                            <!-- Post Content -->

                            <p class="#" ALIGN="justify">Antes de dar por finalizada la fase del diseño conceptual, se debe revisar el esquema conceptual local con el usuario. Este esquema está formado por el diagrama entidadrelación y toda la documentación que describe el esquema. Este proceso debe repetirse
                                hasta que se esté seguro de que el esquema conceptual es una fiel representación de la
                                parte de la empresa que se está tratando de modelar.</p>
                        </ol>

                        <hr>
                        <center>
                            <img class="img-fluid rounded" src="../images/te.PNG" alt="">
                        </center>
                        <hr>

                        <h5> <a href="#"><b>3.3 Aplicaciones</b></a></h5>
                        <!-- Post Content -->
                        <hr>


                        <p class="#" ALIGN="justify">Definición de Aplicación (Application). Programa informático que permite a un usuario utilizar una computadora con un fin específico. Las aplicaciones son parte del software de
                            una computadora, y suelen ejecutarse sobre el sistema operativo.</p>


                        <p class="#" ALIGN="justify">Una aplicación de software suele tener un único objetivo: navegar en la web, revisar correo, explorar el disco duro, editar textos, jugar (un juego es un tipo de aplicación), etc.
                            Una aplicación que posee múltiples programas se considera un paquete. Son ejemplos de
                            aplicaciones Internet Explorer, Outlook, Word, Excel, Dreamweaver, etc.</p>


                        <p class="#" ALIGN="justify">En general, una aplicación es un programa compilado (aunque a veces interpretado),
                            escrito en cualquier lenguaje de programación.</p>

                        <p class="#" ALIGN="justify">Las aplicaciones pueden tener distintas licencias de distribución como ser freeware, shareware, trialware, etc. Las aplicaciones tienen algún tipo de interfaz, que puede ser una
                            interfaz de texto o una interfaz gráfica (o ambas).</p>

                        <p class="#" ALIGN="justify">Debido a la creciente aceptación de las bases de datos por parte de la industria y el gobierno en el plano comercial, y a una variedad de aplicaciones científicas y técnicas, el
                            diseño de bases de datos desempeña un papel central en el empleo de los recursos de
                            información en la mayoría de las organizaciones.</p>


                        <p class="#" ALIGN="justify">Una aplicación de datos típica utiliza la mayoría de los procesos que se ilustran en el diagrama siguiente:</p>

                        <p class="#" ALIGN="justify">El ciclo de datos</p>

                        <hr>
                        <center>
                            <img class="img-fluid rounded" src="../images/cd.PNG" alt="">
                        </center>
                        <hr>



                        <li> <a href="#"><b><u>Conectarse a datos</u></b></a></li>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify">Para llevar datos a la aplicación (y devolver los cambios al origen de datos), debe establecerse algún tipo de comunicación bidireccional. Esta comunicación bidireccional la
                            controlan, por lo general, los objetos de su modelo de datos.</p>

                        <li> <a href="#"><b><u>Preparara la aplicación para recibir datos</u></b></a></li>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify">Si la aplicación usa un modelo de datos desconectado, necesita almacenar
                            temporalmente los datos en la aplicación mientras trabaja con ella.</p>

                        <li> <a href="#"><b><u>Buscar datos en la aplicación</u></b></a></li>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify">Independientemente de que la aplicación utilice un modelo de datos desconectado,
                            necesitará obtener datos. Lleve los datos a la aplicación mediante la ejecución de consultas
                            o procedimientos almacenados de una base de datos. Las aplicaciones que almacenan
                            datos en conjuntos de datos ejecutan las consultas y los procedimientos almacenados
                            mediante objetos mientras que las aplicaciones que almacenan datos en entidades ejecutan
                            las consultas conectando las entidades directamente con los procedimientos almacenados.</p>

                        <li> <a href="#"><b><u>Mostrar datos en formularios</u></b></a></li>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify">Después de introducir los datos en la aplicación, los mostrará en un formulario para que los usuarios los vean o los modifiquen.</p>

                        <li> <a href="#"><b><u>Modificar datos en la aplicación</u></b></a></li>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify">Cuando ya ha presentado los datos a los usuarios, es probable que los modifiquen,
                            agregando, cambiando o eliminando registros antes de devolverlos a la base de datos.</p>

                        <li> <a href="#"><b><u>Validar datos</u></b></a></li>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify">Al realizar cambios en los datos, se necesita comprobar los cambios antes de
                            permitir que los valores sean aceptados de regreso en la base de datos o que éstos se
                            escriban en ella. Validación es el nombre del proceso que comprueba que estos nuevos
                            valores son aceptables para los requisitos de la aplicación. Puede agregar lógica para
                            comprobar los valores de la aplicación a medida que se modifican.</p>

                        <li> <a href="#"><b><u>Guardar datos</u></b></a></li>
                        <!-- Post Content -->

                        <p class="#" ALIGN="justify">Después de realizar los cambios en la aplicación (y validarlos), es necesario enviar los cambios a la base de datos.</p>

                        <p class="#" ALIGN="justify">Los programas de bases de datos organizan y almacenan los datos de manera tal
                            que las tablas están indexadas y se pueden contestar preguntas. Estas herramientas están
                            disponibles en un número de configuraciones diferentes y escalables para ser usadas por
                            un individuo o una corporación global. Algunos son fáciles de usar, con bases de datos a
                            manera de interfaz visual, mientras que otras, al final del espectro empresarial, requieren
                            entrenamiento y herramientas especializadas para ser útiles. Algunos ejemplos de estas
                            aplicaciones son las siguientes:</p>



                        <ul>
                            <li ALIGN="justify"><b><u>Access: </u></b>Es un sistema de base de datos personal de Microsoft. Se trata de un
                                producto de software orientado hacia lo visual, lo que hace que quienes no sean
                                programadores puedan crear bases de datos útiles con facilidad. Su uso más común
                                es para pequeñas bases de datos individuales o en programas multiusuario de uso
                                limitado. Access integra el lenguaje Visual Basic para aplicaciones.</li><br>
                            <li ALIGN="justify"><b><u>Visual FoxPro:</u></b> Es un sistema de base de datos relacional, también producido por
                                Microsoft, que está estrechamente unido a su lenguaje de programación. Este sistema de base de datos es conocido por su motor de procesamiento rápido y la capacidad de manejar numerosas transacciones simultáneas.</li><br>
                            <li ALIGN="justify"><b><u>MySQL Database: </u></b> Es una base de datos basada en servidor que permite a varios
                                usuarios acceder a múltiples bases de datos. El software funciona en múltiples
                                plataformas, incluyendo la mayoría de las variedades de UNIX y Windows. Ofrece
                                usabilidad de primer plano limitada y está diseñado como un servidor de base de
                                datos back-end. MySQL se diferencia de otros productos de base de datos por sus
                                costos, la versión no empresarial se distribuye de forma gratuita.</li><br>
                            <li ALIGN="justify"><b><u>SQL Server: </u></b> Es un servidor de base de datos a nivel empresarial escalable. Este
                                producto se diferencia de la base de datos personal al no proporcionar las
                                herramientas para el usuario que proporciona un producto de base de datos
                                individual. El motor de base de datos se centra en responder rápidamente a las
                                solicitudes del cliente en el formulario de consultas SQL. Estas consultas se pueden
                                generar directamente en SQL Server, o por medio de una interfaz de usuario
                                independiente desarrollada en una variedad de lenguajes de programación. SQL
                                Server está diseñado para manejar bases de datos con millones de registros.</li><br>
                            <li ALIGN="justify"><b><u>Oracle: </u></b>Es otra base de datos escalable a nivel empresarial. La base de datos de SQL soporta bases de datos corporativos distribuidos, que permiten al usuario
                                acceder a los datos de forma local o desde bases de datos remotas en una
                                transacción transparente. Las bases de datos distribuidas ayudan a superar las
                                limitaciones físicas de un entorno informático físico. El tamaño máximo de base de
                                datos para una Oracle es de 8 millones de terabytes, lo que requiere un
                                almacenamiento físico más allá de la capacidad de la mayoría de las instalaciones
                                individuales.</li><br>
                        </ul>
                        <hr>


                        <p class="#" ALIGN="justify">
                          <b> Las etapas del ciclo de vida de una aplicación de bases de datos son las siguientes:</b></p>
                           <ol>
                               <li>Planificación del proyecto.</li>
                               <li>Definición del sistema.</li>
                               <li>Recolección y análisis de los requisitos.</li>
                               <li>Diseño de la base de datos.</li>
                               <li> Selección del DBMS</li>
                               <li>Diseño de la aplicación.</li>
                               <li>Prototipado.</li>
                               <li>Implementación.</li>
                               <li>Conversión y carga de datos.</li>
                               <li>Prueba.</li>
                               <li>Mantenimiento</li>
                           </ol>
                       

                   


                        <!-- Comments Form -->
                        <div class="card my-4">

                            <h5 class="card-header"> <button id='1' class='previous btn btn-success' type='button'>
                                    <span class="fa fa-arrow-circle-left"></span><a href="unidad2-3.php"> Anterior</a> </button>Leave a Comment: <button class='next btn btn-success chevron-right' type='button'> <a href="unidad2-5.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
