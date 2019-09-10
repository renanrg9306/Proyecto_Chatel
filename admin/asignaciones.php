<?php
session_start();
include 'conex.php';
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["idNiveles"] == 1) {
        $user = $_SESSION['NombreUsuario'];
           $codigo = $_SESSION["Codigo"];

           $consulta=mysqli_query($conex, "select Foto from usuarios where Codigo = $codigo");                  
             while($filas=mysqli_fetch_array($consulta)){
                        $foto=$filas['Foto'];                           
                }
         
         
      ?>
<?php 
         // $consulta1="select idDocente, concat(NombresDocente, ' ' ,ApellidosDocente) as Docentes FROM docentes";
          $profesor=mysqli_query($conex,"select idProfesor, concat(NombresProfesor, ' ' ,ApellidosProfesor) as Profesor FROM profesor");
          //$consulta2="select idAsignatura, NombreAsignatura from asignaturas";
          $asignatura=mysqli_query($conex,"select idAsignatura, NombreAsignatura from asignaturas");
          //$consulta3="select idGrupo, NumeroGrupo from grupos";
          $grupo=mysqli_query($conex,"select idGrupo, NumeroGrupo from grupo");
          //$consulta4="select idTurno, NombreTurno from turnos";
          $turno=mysqli_query($conex,"select idTurno, NombreTurno from turnos");
          //$consulta5="select idHorario, NombreHorario from horarios";
          $horario=mysqli_query($conex,"select idHorario, NombreHorario from horarios");

         
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
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/u.png" type="image/x-icon">

    <!-- <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <script src="../js/jquery.js"></script>
    <script src="js/back-to-top.js"></script>
    <!--<script src="../js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="asignaciones/myjava.js"></script>

    <!-- <link href="css/sweetalert.css" rel="stylesheet">
    <script type="text/javascript" src="/js/functions.js"></script>
    <script src="js/sweetalert.min.js"></script>-->


</head>
<!-- Navigation-->

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <img src="../images/u.png" width="30" class="d-inline-block alingn-center" alt="Logo UNI">
        <a class="navbar-brand" href="#">&nbsp; &nbsp; Bases de Datos</a>
     <?php
         
include ('includes/perfil.php');
 ?>


        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administrador**">
                    <a class="nav-link" href="administrador.php">
                        <i class="fa fa-fw fa-users"></i>
                        <span class="nav-link-text">Administrador</span>
                    </a>

                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumnos">
                    <a class="nav-link" href="estudiantes.php">
                        <i class="fa fa-fw fa-user"></i>
                        <span class="nav-link-text">Alumnos</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profesores">
                    <a class="nav-link" href="profesor.php">
                        <i class="fa fa-fw fa-user-plus"></i>
                        <span class="nav-link-text">Profesores</span>
                    </a>
                </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profesores">
                    <a class="nav-link" href="asignaciones.php">
                        <i class="fa fa-fw fa-user-plus"></i>
                        <span class="nav-link-text">Asignaciones</span>
                    </a>
                </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profesores">
                    <a class="nav-link" href="numero_asignaciones.php">
                        <i class="fa fa-fw fa-user-plus"></i>
                        <span class="nav-link-text">Numeros de Asignaciones</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Examenes">
                    <a class="nav-link" href="portada.html">
                        <i class="fa fa-fw fa-clone"></i>
                        <span class="nav-link-text">Examenes</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Laboratorios">
                    <a class="nav-link" href="portada.html">
                        <i class="fa fa-fw fa-database"></i>
                        <span class="nav-link-text">Laboratorios</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pruebas">
                    <a class="nav-link" href="portada.html">
                        <i class="fa fa-fw fa-clipboard"></i>
                        <span class="nav-link-text">Pruebas</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pruebas">
                    <a class="nav-link" href="grupos.php">
                        <i class="fa fa-fw fa-clipboard"></i>
                        <span class="nav-link-text">Grupos</span>
                    </a>
                </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pruebas">
                    <a class="nav-link" href="horarios.php">
                        <i class="fa fa-fw fa-clipboard"></i>
                        <span class="nav-link-text">Horarios</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reportes">
                    <a class="nav-link" href="portada.html">
                        <i class="fa fa-fw fa-file-pdf-o"></i>
                        <span class="nav-link-text">Reportes</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reportes">
                    <a class="nav-link" href="cambiar_foto.php">
                       <i class="fa fa-fw fa-file-pdf-o"></i>
                        <span class="nav-link-text">Cambiar Foto</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Backups">
                    <a class="nav-link" href="backups.php">
                        <i class="fa fa-fw fa-folder-open-o"></i>
                        <span class="nav-link-text">Backups</span>
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

                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="index.php">
                        <i class="fa fa-fw fa-power-off"> </i>Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--//////////////////////////////*************Comienzo del contenido del contenido de las unidades******///////////-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/index.php">Portada</a>
                </li>
                  <li class="breadcrumb-item">
                    <a href="paneladmin.php">Panel Administrador</a>
                </li>
                <li class="breadcrumb-item active">Asignaciones&nbsp;</li>
        
            </ol>
        </div>


        <div class="container">
            <div class="page-header">
                <h1 class="all-tittles">Sistema Web Bases de Datos<small>/ Asignaciones</small></h1>
            </div>
        </div>
        <!--//////////////////////////////*************Comienzo del contenido del contenido de las unidades******///////////-->


        <!-- Content Column -->

        <div class="card">
            <div class="panel panel-success">
                <div class="card header bg-primary">
                    <div class="btn-group pull-right">
                    </div>
                    <center>
                        <h4><b>Administracion de Asignaciones</b></h4>
                    </center>
                </div>
                <br>
                <br>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-1">
                            <h4>Buscar:</h4>
                        </div>

                        <div class="col-md-5">
                            <input type="text" name="s" id="bs-prod" class="form-control" placeholder="Escribir la Descripcion de la Asignacion">
                        </div>
                        <div class="col-md-6">
                            <button id="nuevo-producto" class="btn btn-success"> <i class="fa fa-plus"></i> Nueva Asignacion</button>
                            <a href="reportes/Reporte_Asignaciones.php"> <button class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Exportar a PDF</button> </a>
                            <a href="ReportesAsignaciones.php"> <button class="btn btn-success"><i class="fa fa-eye-open"></i> Ver mas</button> </a>
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
include('conex.php');
    $numeroRegistros = mysqli_num_rows(mysqli_query($conex,"SELECT * FROM asignaciones"));
    echo "Registros Totales: $numeroRegistros";
        ?>
                                </h4>
                            </center>
                        </div>


                        <!-- MODAL PARA EL REGISTRO-->
                        <div class="modal fade" id="registra-datos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content">
                                    <div class="modal-header" style="background:#0a2048; text-align: center;">
                                        <h4 class="modal-title" style="color:white;" id="myModalLabel"><b>
                                                <i class='fa fa-share-alt'></i>&nbsp;&nbsp;Asignaciones</b></h4>
                                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <form id="formulario" class="form-group" onsubmit="return agregarRegistro();">
                                        <div class="modal-body">

                                            <input type="text" class="form-control" required readonly id="id-registro" name="id-registro" readonly="readonly" style="visibility:hidden; height:5px;" />

                                            <div class="form-group row"> <label for="codigo" class="col-md-3 control-label">Proceso:</label>
                                                <div class="col-md-9"><input type="text" class="form-control-plaintext" required readonly id="pro" name="pro" /></div>
                                            </div>

                                            <div class="form-group row"> <label for="carnet" class="col-md-3 control-label">Descripcion:</label>
                                                <div class="col-md-9"><input type="text" class="form-control" id="nombre" name="nombre" required maxlength="50"></div>
                                            </div>
                                            <div class="form-group row"> <label for="carrera" class="col-md-3 control-label">Profesor:</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="profesor" name="profesor">
                                                        <?php 
                          while($fila=mysqli_fetch_row($profesor)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row"> <label for="cuatrimestre" class="col-md-3 control-label">Asignatura:</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="asignatura" name="asignatura">
                                                        <?php 
                          while($fila=mysqli_fetch_row($asignatura)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row"> <label for="year" class="col-md-3 control-label">Grupo:</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="grupo" name="grupo">
                                                        <?php 
                          while($fila=mysqli_fetch_row($grupo)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row"> <label for="year" class="col-md-3 control-label">Horario:</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="horario" name="horario">
                                                        <?php 
                          while($fila=mysqli_fetch_row($horario)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-group row"> <label for="year" class="col-md-3 control-label">Estado:</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="estado" name="estado">
                                                        <option value="0">Inactivo</option>
                                                        <option value="1">Activo</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row"> <label for="carnet" class="col-md-3 control-label">Numero:</label>
                                                <div class="col-md-9"><input type="number" class="form-control" id="numero" name="numero" required maxlength="50"></div>
                                            </div>

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

        </div>


        <!-- Fin del Panel -->



        <!---///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////->
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Base de Datos UNI derechos reservados 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up">-</i>
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
                        <a class="btn btn-primary" href="../index.php">Salir</a>
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
