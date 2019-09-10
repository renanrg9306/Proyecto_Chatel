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
        
          $profesor=mysqli_query($conex,"select idProfesor, concat(NombresProfesor, ' ' ,ApellidosProfesor) as Profesor FROM profesor");
                 
            $TotalEstudiantes = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM estudiantes"));// or die(mysql_error());
        $TotalDocentes = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM profesor"));
        $TotalAsignaturas = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM asignaturas"));
        $TotalGrupos = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM grupo"));
        $TotalHorarios = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM horarios"));
        $TotalUsuarios = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM usuarios"));
        $TotalNumeroAsignaciones = mysqli_num_rows(mysqli_query($conex,"SELECT * FROM numeros_asignaciones"));
         $TotalUsuarios = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM usuarios"));
        $Totalasignaciones = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM asignaciones"));
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
    	
</head>
<!-- Navigation-->

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
       
  <?php
         
include ('includes/modal.php');
 ?>

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
                    <a href="../index.php">Portada</a>
                </li>
                <li class="breadcrumb-item active">Panel de Administracion</li>
            </ol>
        </div>
        
        
         <div class="" align="center">
          <center>
           <img class="img-responsive" src="../images/ave.jpg" width="70%" height="100%">
           </center>
           </div>

        <div class="container">
            <div class="page-header">
                <h1 class="all-tittles">Sistema Web Bases de Datos<small>/Panel de Administracion</small></h1>
            </div>
        </div>
     <!--//////////////////////////////*************Comienzo del contenido******/////////////////////////////////////-->
<section>
       <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-child fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>   
                     
                    </div>
                    <div class="panel-body">
                        <h4 class="media-heading">Estudiantes</h4>
                         <p>Total de Estudiantes: <span class="label label-danger pull-right"><?php echo $TotalEstudiantes ?></span></p>
                         <a href="estudiantes.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-sign-in fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="media-heading">Asignaciones</h4>
                       <p>Total de Asignaciones: <span class="label label-danger pull-right"> <?php echo $Totalasignaciones ?></span></p>
                      <a href="asignaciones.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
          <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-group fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                         <h4 class="media-heading">Profesor</h4>
                       <p>Total de Profesor: <span class="label label-danger pull-right"><?php echo $TotalDocentes ?></span></p>
                       <a href="profesor.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-sort-numeric-asc fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="media-heading">Numeros Asignaciones</h4>
                         <p>Total de Asignaciones: <span class="label label-danger pull-right"><?php echo $TotalNumeroAsignaciones ?></span></p>
                       <a href="numero_asignaciones.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-clipboard fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4 class="media-heading">Reportes</h4>
                    <p>Total de Reportes: <span class="label label-danger pull-right">10</span></p>
                       <a href="#" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                       <h4 class="media-heading">Asignaturas</h4>
                       <p>Total de Asignaturas: <span class="label label-danger pull-right"><?php echo $TotalAsignaturas ?></span></p>
                       <a href="asignaturas.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                 <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-list-ol fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                         <h4 class="media-heading">Grupos</h4>
                      <p>Total de Grupos: <span class="label label-danger pull-right"><?php echo $TotalGrupos ?></span></p>
                      <a href="grupos.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
             <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                            <h4 class="media-heading">Horarios</h4>
                        <p>Total de Horarios: <span class="label label-danger pull-right"><?php echo $TotalHorarios ?></span></p>
                      <a href="horarios.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                      <h4 class="media-heading">Usuarios</h4>
                        <p>Total de Usuarios: <span class="label label-danger pull-right"><?php echo $TotalUsuarios ?></span></p>
                        <a href="administrador.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                         <h4 class="media-heading">Backups</h4>
                      <p>Copias y Restauracion de BD <span class="label label-danger pull-right"></span></p>
                      <a href="copias_seguridad2.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-3x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                            <h4 class="media-heading">Configuraciones</h4>
                        <p>Configuracion de Cuenta<span class="label label-danger pull-right"></span></p>
                      <a href="cambiar_foto.php" class="btn btn-success"><i class="fa fa-mail-forward"></i>  Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
          3
            </div>
        </div>


         <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-3 col-sm-6">
                
            </div>
            <div class="col-md-3 col-sm-6">
        
            </div>
            <div class="col-md-3 col-sm-6">
         4
            </div>
            <div class="col-md-3 col-sm-6">
      
                   
            </div>
        </div>
       
       </section>
       
     <!--//////////////////////////////*************fin del contenido////////////////////////////////******///////////-->    
       
     
       
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
