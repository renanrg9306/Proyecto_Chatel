<?php
session_start();
include 'conex.php';
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["idNivel"] == 1) {
        $user = $_SESSION['NombreUsuario'];
           $codigo = $_SESSION["idUsuario"];

           $idPersona = $_SESSION['idPersona'];

           $consulta=mysqli_query($conex, "select foto from usuarios where idPersona = $idPersona");                  
           while($filas=mysqli_fetch_array($consulta)){
                    $foto=$filas['foto'];                           
            }

      $consulta=mysqli_query($conex, "SELECT  CONCAT(P.Nombre,' ',P.Apellido) As NombreUsuario, P.correo from usuarios AS US INNER JOIN persona AS P on
      US.idPersona = P.idPersona where US.idPersona = $idPersona");                  
        while($filas=mysqli_fetch_array($consulta)){
                   $user=$filas['correo']; 
                                             
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
    <link href="#" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <!-- <link href="../css/style.css" rel="stylesheet">-->

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
    <script type="text/javascript" src="grupos/myjava.js"></script>

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

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Examenes">
                    <a class="nav-link" href="gestiondeusuarios.php">
                        <i class="fa fa-fw fa-clone"></i>
                        <span class="nav-link-text">Gestión de Usuarios</span>
                    </a>
                </li>



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
                        <span class="nav-link-text">Unidades</span>
                    </a>
                </li>
              
              <!--   <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Laboratorios">
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
                </li> -->
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

    <!--*************Comienzo del contenido del contenido de las unidades*******-->
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
                <li class="breadcrumb-item active">Grupos&nbsp;</li>
        
            </ol>
        </div>

        <!--************************************************************************************************-->
        <div class="card border-primary">
            <div class="card-header">
                <h1 class="all-tittles">Sistema Web Bases de Datos<small>/ Administración Grupos de Trabajo</small></h1>

            </div>
            <div class="card card-primary" style="margin: 50px 0;">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <center> <img src="../images/grup.jpg" alt="user" class="img-responsive center-box" style="max-width: 110px;"></center>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        <h5>
                            Bienvenido a la sección donde se encuentra el listado de los grupos de clase, donde puedes editar el nombre del grupo, ver la cantidad de grupos, eliminar un grupo.</h5>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="panel-body">
                    <div class="row">
                        <img src="../images/busca.jpg" width="25" height="25"/>
                        <div class="col-md-2">
                            <h4>Buscar:</h4>
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="s" id="bs-prod" class="form-control" placeholder="Escribir el nombre del Grupo">
                        </div>
                        <div class="col-md-4">
                            <button id="nuevo-producto" class="btn btn-success"> <i class="fa fa-fw fa-plus"></i> Nuevo Grupo de Clase</button>
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
                                     $numeroRegistros = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM grupo"));
                                     echo "Registros Totales: $numeroRegistros";
                                  ?>
                                </h4>
                            </center>
                        </div>


                        <!-- MODAL PARA EL REGISTRO-->
                        <div class="modal fade" id="registra-datos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background:#0a2048; text-align:center;">

                                         <h4 class="modal-title" style="color:white;" id="myModalLabel"><b>
                                        <i class='fa fa-fw fa-plus'></i>&nbsp;&nbsp;Grupos</b></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                    </div>
                                    <form id="formulario" class="form-group" onsubmit="return agregarRegistro();">
                                        <div class="modal-body">

                                            <input type="text" class="form-control" required readonly id="id-registro" name="id-registro" readonly="readonly" style="visibility:true; height:5px;" />

                                            <div class="form-group row"> <label for="codigo" class="col-md-4 control-label">Proceso:</label>
                                                <div class="col-md-10"><input type="text" readonly class="form-control-plaintext" required readonly id="pro" name="pro" /></div>
                                            </div>

                                            <!-- <div class="form-group row"> <label for="codigo" class="col-md-4 control-label">Numero Grupo:</label>
                                                <div class="col-md-10"><input type="text" class="form-control" id="numero" name="numero" required="true" /></div>
                                            </div> -->

                                            <div class="form-group row"> <label for="grupo" class="col-md-4 control-label">Nombre Grupo:</label>
                                                <div class="col-md-10"><input type="text" class="form-control" id="NombreGrupo" name="NombreGrupo" required="true" maxlength="300"></div>
                                            </div>

                                            <div class="form-group row"> <label for="profesor" class="col-md-4 control-label">Asignatura:</label>
                                            <div class="col-md-10"><select class="form-control" name="idAsignatura" required="true">
                                            <?php
                                                include 'conex.php';
                                                $conex = mysqli_connect("localhost", "agat", "1234", "bd");
                                                $query = mysqli_query($conex,"SELECT A.idAsignatura, NombreAsignatura FROM asignaturas AS A");
                                                    while($valores = mysqli_fetch_array($query)){
                                                        echo "<option value='$valores[idAsignatura]'>$valores[NombreAsignatura]</option>";
                                                     }
                                            ?>
                                            </select>
                                            
                                            </div>
                                            </div>
                                            

                                            <div class="form-group row"> <label for="profesor" class="col-md-4 control-label">Docente:</label>
                                            <div class="col-md-10"><select class="form-control" name="idProfesor" required="true">
                                            <?php
                                                include 'conex.php';
                                                $conex = mysqli_connect("localhost", "agat", "1234", "bd");
                                                $query = mysqli_query($conex,"SELECT P.idPersona, CONCAT(P.Nombre,' ',P.Apellido) AS Docente FROM persona AS P INNER JOIN usuarios AS Us ON P.idPersona = Us.idPersona AND Us.idNivel=2");
                                                    while($valores = mysqli_fetch_array($query)){
                                                        echo "<option value='$valores[idPersona]'>$valores[Docente]</option>";
                                                     }
                                            ?>
                                            </select>
                                            
                                            </div>
                                            </div>

                                            <div class="form-group row"> <label for="profesor" class="col-md-4 control-label">Horario:</label>
                                            <div class="col-md-10"><select class="form-control" name="idHorario" required="true">
                                            <?php
                                                include 'conex.php';
                                                $conex = mysqli_connect("localhost", "agat", "1234", "bd");
                                                $query = mysqli_query($conex,"SELECT idHorario, NombreHorario FROM horarios");
                                                    while($valores = mysqli_fetch_array($query)){
                                                        echo "<option value='$valores[idHorario]'>$valores[NombreHorario]</option>";
                                                     }
                                            ?>
                                            </select>
                                            
                                            </div>
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


