<?php
session_start();
include '../admin/conex.php';
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["idNivel"] == 2) {
            $user = $_SESSION['NombreUsuario'];
            $idPersona = $_SESSION["idPersona"];
        ?>
<?php 

$consultaD=mysqli_query($conex, "select Foto from usuarios where idPersona = $idPersona");                  
while($filas=mysqli_fetch_array($consultaD)){
         $foto=$filas['Foto'];                           
 }

 $consultaD2 = mysqli_query($conex, "SELECT   CONCAT(P.Nombre, ' ', P.Apellido) as Profesor, P.correo from persona AS P INNER JOIN usuarios AS U ON P.idPersona = $idPersona"); 
 while($filas2=mysqli_fetch_array($consultaD2)){
         $profesor=$filas2['correo'];  
         
         
 }

 $grupo=mysqli_query($conex,"select idGrupo, CONCAT(G.NombreGrupo,' ',P.Nombre,' ',H.NombreHorario) As NombreGrupo from grupo AS G INNER JOIN persona AS P ON G.idProfesor = P.idPersona INNER JOIN horarios AS H ON G.idHorario = H.idHorario WHERE G.idProfesor = $idPersona");

         
          /* $asignatura=mysqli_query($conex,"SELECT asignaturas.idAsignatura as id, asignaturas.NombreAsignatura as asignatura
                      FROM asignaciones INNER JOIN asignaturas ON  asignaciones.idAsignatura =  asignaturas.idAsignatura
                      where idProfesor = $codigo and asignaciones.Estado = 1");
          
        
          $estudiante=mysqli_query($conex,"SELECT estudiantes.idEstudiantes as id, concat (estudiantes.NombresEstudiante,' ', estudiantes.ApellidosEstudiante) as estudiante FROM asignaciones INNER JOIN asignaturas ON  asignaciones.idAsignatura =  asignaturas.idAsignatura where asignaciones.idProfesor = $codigo and asignaciones.Estado = 1 group by estudiantes.idEstudiantes");
         
         
         $estudiante2=mysqli_query($conex,"select idEstudiantes, concat(NombresEstudiante, ' ' ,ApellidosEstudiante) as Estudiantes FROM estudiantes");
         
                  $consultaD=mysqli_query($conex, "select Foto from profesor where idProfesor = $codigo");                  
                while($filas=mysqli_fetch_array($consultaD)){
                         $foto=$filas['Foto'];                           
                 }

                 $consultaD2 = mysqli_query($conex,"select concat (NombresProfesor, ' ', ApellidosProfesor) as Profesor from profesor where idProfesor = $codigo"); 
                 while($filas2=mysqli_fetch_array($consultaD2)){
                         $profesor=$filas2['profesor'];                           
                 }
          */
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
    <!-- Bootstrap core CSS
     <link href="css2/bootstrap.css" rel="stylesheet">-->
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/u.png" type="image/x-icon">

    <!-- <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <!-- <script src="../js/jquery.js"></script>-->

    <script src="../js/bootstrap.min.js"></script>

    <!--<link href="../css/modern-business.css" rel="stylesheet">-->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../js/back-to-top.js"></script>

 <script src="evaluacion_estudiantes/myjava.js"></script>

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <img src="../images/u.png" width="30" class="d-inline-block alingn-top" alt="Logo UNI">
        <a class="navbar-brand" href="../index.php">&nbsp; &nbsp; Bases de Datos </a>
              
      <?php
include ('includes/perfil.php');
 ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumnos">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsecatalogo" data-parent="#exampleAccordion">

                        <div class="card-header"> <i class="fa fa-fw fa-wrench"></i><span class="nav-link-text">Catalogo Profesor</span></div>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapsecatalogo">


                        <div class="card border-primary ">

                            <div class="card-body">


                                <div class="list-group">
                                    <a href="material_didactico.php" class="list-group-item"> <i class="fa fa-folder-open"></i> Material Didactico
                                    </a>
                                    <a href="planificacion_tarea.php" class="list-group-item"><i class="fa fa-file"></i> Planificacion de Tareas
                                    </a>
                                    <a href="evaluacion_estudiantes.php" class="list-group-item"> <i class="fa fa-pencil"></i> Pantalla de Evaluacion
                                    </a>
                                    <a href="ver_tarea_estudiante.php" class="list-group-item"> <i class="fa fa-edit"></i> Tarea de Estudiantes
                                    </a>
                                    <a href="cambiar_foto.php" class="list-group-item"> <i class="fa fa-user"></i>Cambiar Foto
                                    </a>
                                    <a href="pantalla_reportes.php" class="list-group-item"> <i class="fa fa-list-alt"></i> Pantalla de Reportes
                                    </a>
                                </div>

                            </div>
                        </div>


                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumnos">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsereporte" data-parent="#exampleAccordion">
                        <div class="card-header"> <i class="fa fa-fw fa-wrench"></i><span class="nav-link-text">Reporte Profesor</span></div>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapsereporte">

                        <div class="card border-primary ">

                            <div class="card-body">

                                <div class="list-group">

                                    <a href="reportes/Mis_Asignaciones.php" class="list-group-item"><i class="fa fa-chevron-right"></i> Asignaciones por Profesor </a>
                                    <a href="estudiantes_x_asignaturas.php" class="list-group-item"><i class="fa fa-chevron-right"></i>Estudiantes por Asignatura
                                    </a>
                                    <a href="entrega_tareas_estudiantes.php" class="list-group-item"> <i class="fa fa-chevron-right"></i>Entrega de Tareas
                                    </a>
                                    <a href="reportes/Mis_Materiales_Didacticos.php" class="list-group-item"><i class="fa fa-chevron-right"></i>Material de Aprendizaje
                                    </a>
                                    <a href="reportes/Tareas_Orientadas_Por_Docentes.php" class="list-group-item"><i class="fa fa-chevron-right"></i>Tareas a los Estudiantres
                                    </a>
                                </div>



                            </div>
                        </div>


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
                        <i class="fa fa-fw fa-angle-left">--</i>
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
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="index.php" >
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
                    <a href="profesor.php">Profesor</a>
                </li>

                <li class="breadcrumb-item active">Evaluaciones de Estudiantes</li>
            </ol>
        </div>

        <!--*************************CONTENIDO******************************-->
       
        <div class="card border-primary">
                        <div class="card-header bg-primary">
                            <div class="btn-group pull-right">
                            </div>
                            <center>
                                <h4><b>Tareas Pendiente de Evaluación Estudiantes</b></h4>
                            </center>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class = "col-md-12">
                            <div class="row">
                                <div class="input-group col-md-1"> 
                                    <label for="year" class="control-label">Grupo:</label>
                                </div>

                                <div class="col-md-5">    
                                    <select class="form-control" id="grupo" name="grupo">
                                        <?php 
                                        while($fila=mysqli_fetch_row($grupo)){
                                        echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                <button class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Exportar a PDF</button>
                                
                                </div>
                            </div> 
                               
                            
                        </div>
                    </div>
                                
                           
                                <br>
                                <br>
                                <div class="registros" style="width:100%;" id="agrega-registros"></div>
                                <div class="col-md-6" style="text-align: left;">
                                    <center>
                                        <ul class="pagination" id="pagination"></ul>
                                    </center>
                                </div>
                                <div class="col-md-6">
                                    <center>
                                        <h4 style="font-weight: bold;">
                                            <?php
include('../admin/conex.php');
    $numeroRegistros = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM evaluaciones where idProfesor = $codigo"));
    echo "Registros Totales: $numeroRegistros";
        ?>
                                        </h4>
                                    </center>
                                </div>


                                <!-- MODAL PARA EL REGISTRO-->
                                <div class="modal fade" id="registra-datos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background:#0a2048; text-align:center">
                                                   <h4 class="modal-title" style="color:white;" id="myModalLabel"><b>
                                                        <i class='fa fa-pencil'></i>&nbsp;&nbsp;Evaluacion a los Estudiantes</b></h4>
                                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <form id="formulario" class="form-group" onsubmit="return agregarRegistro();">
                                                <div class="modal-body">

                                                    <input type="text" class="form-control" required readonly id="id-registro" name="id-registro" readonly="readonly" style="visibility:hidden; height:5px;" />

                                                    <div class="form-group row"> <label for="codigo" class="col-md-4 control-label">Proceso:</label>
                                                        <div class="col-md-8"><input type="text" class="form-control-plaintext" required readonly id="pro" name="pro" /></div>
                                                    </div> <br>
                                                    <div class="form-group row"> <label for="carnet" class="col-md-4 control-label">Observaciones:</label>
                                                        <div class="col-md-8">
                                                            <textarea class="form-control" id="descripcion" name="descripcion" required maxlength="100"></textarea>
                                                        </div>
                                                    </div> <br>

                                                    <div class="form-group row"> <label for="cuatrimestre" class="col-md-4 control-label">Estudiantes:</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" id="estudiante" name="estudiante">
                                                                <?php 
                          while($fila=mysqli_fetch_row($estudiante2)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                                                            </select>
                                                        </div>
                                                    </div> <br>

                                                    <div class="form-group row"> <label for="cuatrimestre" class="col-md-4 control-label">Asignatura:</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" id="asignatura" name="asignatura">
                                                                <?php 
                          while($fila=mysqli_fetch_row($asignatura)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                                                            </select>
                                                        </div>
                                                    </div> <br>

                                                    <div class="form-group row"> <label for="carnet" class="col-md-4 control-label">Unidad:</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" id="unidad" name="unidad" required maxlength="50">
                                                        </div>
                                                    </div> <br>

                                                    <div class="form-group row"> <label for="carnet" class="col-md-4 control-label">Tarea:</label>
                                                        <div class="col-md-8"><input type="text" class="form-control" id="tarea" name="tarea" required maxlength="50"></div>
                                                    </div> <br>

                                                    <div class="form-group row"> <label for="carnet" class="col-md-4 control-label">Puntaje:</label>
                                                        <div class="col-md-8"><input type="number" class="form-control" name="puntaje" id="puntaje" required maxlength="50"></div>
                                                    </div> <br><br><br>




                                                    <div id="mensaje"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success" data-dismiss="modal"><b>Close</b></button>
                                                    <input type="submit" value="Registrar" class="btn btn-success" id="reg" />
                                                    <input type="submit" value="Editar" class="btn btn-warning" id="edi" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- *******************Fin del contenido************************************************************** -->




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
                        <a class="btn btn-primary" href="/index.php">Salir</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="../vendor/chart.js/Chart.min.js"></script>
        <script src="../vendor/datatables/jquery.dataTables.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="../js/sb-admin-datatables.min.js"></script>
        <script src="../js/sb-admin-charts.min.js"></script>
        <script src="../admin/js/main.js"></script>
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
