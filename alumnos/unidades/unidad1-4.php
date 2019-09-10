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


                        <h5> <a href="#">ÁLGEBRA RELACIONAL</a></h5>
                        <!-- Post Content -->
                        <hr>
                        <p ALIGN="justify">El modelo relacional lleva asociado a su parte estática (estructura y restricciones) una dinámica que permite la transformación entre estados de la BD. Esta transformación de un estado de origen a un estado objetivo se realiza aplicando un conjunto de operadores, mediante los cuales se llevan a cabo las siguientes operaciones:</p>

                        <p ALIGN="justify"><b></b>•	Inserción de tuplas.</p>
                        <p ALIGN="justify"><b></b>•	Borrado de tuplas</p>
                        <p ALIGN="justify"><b></b>•	Modificación de tuplas.</p>
                        <p ALIGN="justify"><b></b>•	Consulta.</p>

                        <p ALIGN="justify">Una relación se define como un conjunto de tuplas., donde todos los elementos de un conjunto son distintos, por tanto, todas las tuplas de una relación deben ser distintas, esto significa que no puede haber dos tuplas que tengan la misma combinación de valores para todos sus atributos.
                        Matemáticamente, los elementos de un conjunto no están ordenados; por tanto las tuplas de una relación no tienen un orden específico, pero ésta intenta representar los hechos a un nivel lógico o abstracto donde podemos especificar muchos ordenamientos lógicos en una relación. Cuando una relación se implementa en forma de archivo, se puede especificar un ordenamiento físico para los registros del archivo, de manera similar, cuando presentamos una relación en forma de tabla, las filas se muestran en cierto orden. Para manipular relaciones completas, el álgebra relacional proporciona una serie de operadores que podemos clasificar en:
                        </p>
                            <p ALIGN="center"><b>1.	Operadores primitivos</b></p>
                                  <p ALIGN="justify"><b>•	Unarios:</b> tienen como operando una única relación.</p>
                                    <p ALIGN="justify"><b></b>•	Restricción (σ). También llamada selección, sirve para seleccionar un subconjunto de las tuplas de una relación que satisfacen una condición de selección. Si visualizamos una relación como una tabla, esta operación selecciona algunas filas de la tabla y desecha otras.
                                    Notación: “σ&lt;condición de selección&gt;(&lt;nombre de la relación &gt;)”
                                        </p>
                            
                            <p ALIGN="justify"><b>Ejemplo: </b>considerando la relación:</p>
                                <p ALIGN="center"><b>Empleado</b></p>
                             <center>
                            <img class="img-fluid rounded" src="../images/t1.png" alt="">
                        </center>
                                                   <hr>
                               
                                <p ALIGN="justify"><b>La operación:</b></p>
                          <p ALIGN="justify">σ ( NDEP = 4 Y SALARIO > 2500) O ( NDEP = 5 Y SALARIO > 3000 ) (EMPLEADO) daría la siguiente relación:</p>  
                                  <center>
                                  <img class="img-fluid rounded" src="../images/t2.png" alt="">
                                   </center>
                                 
                            <p ALIGN="justify">•	Proyección (π). Selecciona ciertas columnas de la tabla y desecha las demás, eliminando las tuplas duplicadas que hubieran podido resultar.
                            Notación: π&lt;lista de atributos&gt;(&lt;nombre de la relación&gt;)
                            Ejemplo: considerando la relación </p> 
                                        <p ALIGN="center"><b>Empleado</b></p> 
                                             <center>
                                            <img class="img-fluid rounded" src="../images/t3.png" alt="">
                                            </center> 
                            
                                <p ALIGN="justify"><b>La operación:</b></p>
                          <p ALIGN="justify">π SALARIO, SEXO, NOMBRE (EMPLEADO) daría la siguiente relación:
                            </p>
                                           <center>
                                            <img class="img-fluid rounded" src="../images/t4.png" alt="">
                                            </center>
                                <p ALIGN="justify">Se pueden efectuar operaciones combinadas, por ejemplo, proyectar una relación después de efectuar alguna selección.
                                Considerando la relación EMPLEADO, el resultado de aplicar la operación:
                                π NOMBRE, SALARIO (σ NDEP = 5 ( EMPLEADO)) daría como resultado:
                                </p>                                  
                                       <center>
                                            <img class="img-fluid rounded" src="../images/t5.png" alt="">
                                            </center>  
                                    <p ALIGN="justify">Si queremos cambiar los nombres de los atributos de una relación que resulte de aplicar una operación del álgebra relacional, bastará con que incluyamos una lista con los nuevos nombres de atributos entre paréntesis. 
                                   <b>Ejemplo:</b> 
                                    TEMP ← σ NDEP = 5 (EMPLEADO)
                                    NUEVO (NOMPILA, SEX, SUELDO) ← π NOMBREP, SEXO, SALARIO (TEMP) NUEVO
                                    </p>                                        
                                     <center>
                                            <img class="img-fluid rounded" src="../images/t6.png" alt="">
                                            </center>
                                <p ALIGN="justify"><b>•Binarios:</b> se aplican a dos relaciones que deberán tener el mismo tipo de tuplas; esta condición se denomina compatibilidad de unión. Tomando como base las relaciones ESTUDIANTE y PROFESOR se mostraran los resultados obtenidos al realizar las siguientes operaciones:
                                    </p>                              
                           <p ALIGN="center"><b>Estudiante</b></p>  
                           
                             <center>
                                            <img class="img-fluid rounded" src="../images/t7.png" alt="">
                                            </center>
                               
                             <p ALIGN="center"><b>Profesor</b></p>
                             
                             <center>
                                            <img class="img-fluid rounded" src="../images/t8.png" alt="">
                                            </center>
                         <p ALIGN="justify"><b>•	Unión ( ∪ ).</b> La unión de dos relaciones r1 y r2 con esquemas compatibles R1 y R2, es otra relación definida sobre el mismo esquema de relación y cuya extensión estará constituida por el conjunto de tuplas que pertenezcan a r1 y r2 (se eliminarán las tuplas duplicadas puesto que se trata de un conjunto).
                            <b>Ejemplo:</b> </p>
                             <p ALIGN="center"><b>ESTUDIANTE ∪ PROFESOR</b></p>
                                                                             
                                            <center>
                                            <img class="img-fluid rounded" src="../images/t9.png" alt="">
                                            </center>
                                            
                 <p ALIGN="justify"><b>•Diferencia (−).</b>  La diferencia de dos relaciones r1 y r2 con esquemas compatibles R1 y R2, es otra relación definida sobre el mismo esquema de relación y cuya extensión estará constituida por el conjunto de tuplas que pertenezcan a r1 pero no a r2.
                            <b>Ejemplo:</b> </p>
                             <p ALIGN="center"><b>ESTUDIANTE – PROFESOR</b></p>
                                                                             
                                            <center>
                                            <img class="img-fluid rounded" src="../images/t10.png" alt="">
                                            </center>
                        <p ALIGN="justify"><b>•	Producto Cartesiano Generalizado ( X ).</b> El producto cartesiano generalizado de dos relaciones de cardinalidades m1 y m2 es una relación definida sobre la unión de los atributos de ambas relaciones y cuya extensión estará constituida por las m1 x m2 tuplas formadas concatenando (uniendo) cada tupla de la primera relación con cada una de las tuplas de la segunda. No se exige que las dos relaciones sean compatibles en sus esquemas. 
                            <b>Ejemplo:</b> </p>
                             
                                                                             
                                            <center>
                                            <img class="img-fluid rounded" src="../images/t11.png" alt="">
                                            </center>                                   
                                                                               
                                <p ALIGN="center">La operación SOCIO X LIBRO daría:</p> 
                                
                                      <center>
                                            <img class="img-fluid rounded" src="../images/t12.png" alt="">
                                            </center>
                                            <hr>
                              <p ALIGN="center"><b>2.	Operadores Derivados</b></p>                    
                   <p ALIGN="justify"><b>•	Combinación (  ).</b> También llamado reunión; la combinación de dos relaciones respecto a una cierta condición de combinación, es otra relación constituida por todos los pares de tuplas concatenadas, tales que, en cada par, las correspondientes tuplas satisfacen la condición especificada. Entre las funciones que deben aplicarse a colecciones de valores numéricos están SUMA, PROMEDIO, MÁXIMO y MÍNIMO. La función CUENTA sirve para contar tuplas. Puesto que uno de cada par de atributos con valores idénticos es superfluo, se ha creado una nueva operación llamada reunión natural (*), para deshacerse del segundo atributo en una condición de equirreunión (=).
                    Notación: R1 &lt;condición de reunión &gt; R2
                    <b>Ejemplo:</b> Dadas las relaciones AUTOR y LIBRO realizar la combinación que se indica:
                    </p>  
                       
                                            <center>
                                            <img class="img-fluid rounded" src="../images/t13.png" alt="">
                                            </center>
                           <p ALIGN="center"><b>AUTOR * LIBRO</b></p>
                                                <p ALIGN="center">(AUTOR.nombre = LIBRO.autor)</p>
                                            <center>
                                            <img class="img-fluid rounded" src="../images/t14.png" alt="">
                                            </center>
                                           
                   <p ALIGN="justify"><b>•	Intersección ( ∩ ). </b>El resultado de esta operación, es una relación que incluye a las tuplas que están tanto en r1 como en r2
                    <b>Ejemplo:</b>
                    </p>  
                         <p ALIGN="center"><b>ESTUDIANTE ∩ PROFESOR</b></p>
                                           <center>
                                            <img class="img-fluid rounded" src="../images/t15.png" alt="">
                                            </center>
                      <p ALIGN="justify"><b>•	División ( ÷ ):</b> La división de una relación R1 (dividendo) por otra R2 (divisor) es una relación R (cociente) tal que, al realizarse su combinación con el divisor, todas las tuplas resultantes se encuentran en el dividendo. Es un operador muy útil para simplificar consultas, evitando tener que hacer la consulta especificando el conjunto de operaciones anteriores. Ejemplo: Obtener los autores que han publicado en las editoriales CECSA y Trillas.
                    <b>Ejemplo:</b>                      
                          
                                           <center>
                                            <img class="img-fluid rounded" src="../images/t16.png" alt="">
                                            </center>
                                            <hr>
                             <p ALIGN="center"><b>3.Operadores Adicionales de Consulta</b></p>                  
                                            
                  <p ALIGN="justify"><b>•	Agrupación (“Group by”).</b>     Para aplicar funciones de agregación (frecuencia, suma, media, etc.), podemos agrupar tuplas en subconjuntos que posean valores comunes de ciertos atributos.
                    <b>Ejemplo:</b>                          
                              <p ALIGN="center"><b>AUTOR_ARTIC</b></p>  
                                            <center>
                                            <img class="img-fluid rounded" src="../images/t17.png" alt="">
                                            </center>           
                     <p ALIGN="center"><b>AUTOR_ARTIC AGRUPACION_POR nacionalidad, MEDIA (n° artículos )</b></p>                                      <center>
                                            <img class="img-fluid rounded" src="../images/t18.png" alt="">
                                            </center>           
                                            
                        <!-- Comments Form -->
                        <div class="card my-4">
                            <h5 class="card-header">
        <button id='1' class='previous btn btn-success' type='button'>
            <span class="fa fa-arrow-circle-left"></span><a href="unidad1-3.php"> Anterior</a> </button> Leave a Comment:<button  class='next btn btn-success chevron-right' type='button'> <a href="unidad1-4.php">Siguiente</a> <span class="fa fa-arrow-circle-right"> </span> </button></h5>
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
