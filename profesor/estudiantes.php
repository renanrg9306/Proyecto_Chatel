<?php
include '../admin/conex.php'; 
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
session_start();

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["idNivel"] == 2) {
            $user = $_SESSION['NombreUsuario'];
            $codigo = $_SESSION["Codigo"];

              $consulta=mysqli_query($conex, "select Foto from profesor where idProfesor = $codigo");                  
                while($filas=mysqli_fetch_array($consulta)){
                         $foto=$filas['Foto'];                           
                 }

                 $consulta2 = mysqli_query($conex, "select concat (NombresProfesor, ' ', ApellidosProfesor) as Profesor from profesor where idProfesor = $codigo") or die(mysqli_error($conex));
                 while ($filas2=mysqli_fetch_array($consulta2))  {
                         $profesor=$filas2['Profesor'];                           
                 }
?>

  <?php 
          $consulta=mysqli_query($conex, "SELECT idGrupo, NumeroGrupo from grupo");
          $grupo=($consulta);
        ?>
<script type="text/javascript">
 $(document).on("click", ".open-Updatepicture", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #modal2").val(myTitle);
     
}); 
 </script>
 
 <script type="text/javascript">
 $(document).on("click", ".open-Updatepictures", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #modal2").val(myTitle);
     
}); 
 </script>

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
   
    <!--<script src="../js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="estudiantes/myjava.js"></script>

   <!-- <link href="css/sweetalert.css" rel="stylesheet">
    <script type="text/javascript" src="/js/functions.js"></script>
    <script src="js/sweetalert.min.js"></script>-->


</head>

<div id="Updatepicture" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-dialog-left modal-md" style="float:right;width:20%">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background-color:#0a2048;">
        <center>
        <h4 class="modal-title" style="color:white;" >Cambiar imagen de perfil</h4>
     </center>
      </div>
       <div style="margin-left: : 10px; margin-right: 10px;">
           <form id="formulario" action="recibir_foto.php" class="form-group" method="post" enctype="multipart/form-data">
            <div class="modal-body">

          <div class="form-group"> <label for="carrera" class="col-md-1 control-label"><b>Foto:</b></label>
                        
                      <input type="file" name="foto" id="foto" required="true" class="form-control">
                       
                    </div> 
              <div style="margin-top: 10px"> 
              <center><input type="submit" value="Cambiar Foto"  class="btn btn-success" />
              <button type="button" class="btn btn-success" data-dismiss="modal"><b>Close</b></button>
              </center> 
               </div>         
             </div>         
        </form>
      </div>
      
      </div> <!-- fin modal cont-->
       
  </div> <!-- fin modal body-->
  </div><!-- fin 1-->
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

                                    <a href="reportes/Mis_Asignaciones.php" class="list-group-item"><i class="fa fa-chevron-right"></i> Asignaciones por Docente </a>
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

                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="index.php">
                        <i class="fa fa-fw fa-power-off">   </i>Salir</a>
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
                    <a href="profesor.php">Panel Profesor</a>
                </li>
                <li class="breadcrumb-item active">Alumnos&nbsp;</li>
        
            </ol>
        </div>


           
        <div class="container">
            <div class="page-header">
                <h1 class="all-tittles">Sistema Web Bases de Datos<small>/ Administración Estudiantes</small></h1>
            </div>
        </div>

        <div class="container-fluid" style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <center> <img src="../images/imag.png" alt="user" class="img-responsive center-box" style="max-width: 110px;"></center>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    <h5>
                        Bienvenido a la sección donde se encuentra el listado de los Estudiantes, puedes desactivar la cuenta de cualquier Estudiante, modificar y eliminar los datos.</h5>
                </div>
            </div>
        </div>

        <div class="panel-heading">
            <div class="btn-group pull-right"> </div>
            <center>
                <h4><b>Administracion de Estudiantes del Sistema </b></h4>
            </center>
        </div>

        <div class="container-fluid" >
            <div class="row">
                <img src="../images/busca.jpg" width="25" height="25"  />
                <div class="col-md-1">
                    <b>Buscar:</b>
                </div>
                <div class="col-md-5">
                    <input type="text" name="s" id="bs-prod" class="form-control" placeholder="Escribir el nombre del Estudiante">
                </div>
                <div class="col-md-5">
                    <button id="nuevo-producto" class="btn btn-success"> 
                    <i class="fa fa-fw fa-plus"></i> Nuevo Estudiante</button>
                           
		          <a href="Reporte_PDF_Estudiantes.php"> <button class="btn btn-primary"><i class="fa fa-file-pdf-o"></i>  Exportar Listado a PDF</button> </a>
		           </div>   
               
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
                                     $numeroRegistros = mysqli_num_rows(mysqli_query($conex, "SELECT * FROM estudiantes"));
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
              <i class='fa fa-user'></i>&nbsp;&nbsp;Estudiantes</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form id="formulario" class="form-group" onsubmit="return agregarRegistro();">
            <div class="modal-body">

            <input type="text" class="form-control" required readonly id="id-registro" name="id-registro" readonly="readonly" style="visibility:hidden; height:5px;"/>

                 <div class="form-group row"> <label for="codigo" class="col-md-2 control-label">Proceso:</label>
				<div class="col-md-10"><input type="text" readonly class="form-control-plaintext" required readonly id="pro" name="pro"/></div>
			   </div> 
               <div class="form-group row"> <label for="carnet" class="col-md-2 control-label">Carnet:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="carnet" name="carnet" required maxlength="10"></div>
			   </div> 
			   <div class="form-group row"> <label for="nombre" class="col-md-2 control-label">Nombres:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="nombre" name="nombre" required maxlength="50"></div>
			   </div>
			   <div class="form-group row"> <label for="apellido" class="col-md-2 control-label">Apellidos:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="apellido" name="apellido" required maxlength="50"></div>
			   </div>
			   <div class="form-group row"> <label for="cedula" class="col-md-2 control-label">Cedula:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="cedula" name="cedula" required maxlength="16"></div>
			   </div>
			   <div class="form-group row"> <label for="correo" class="col-md-2 control-label">Correo:</label>
				<div class="col-md-10"><input type="email" class="form-control" id="correo" name="correo" required maxlength="50"></div>
			   </div>
			   <div class="form-group row"> <label for="celular" class="col-md-2 control-label">Celular:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="celular" name="celular" required maxlength="8"></div>
			   </div>
			   <div class="form-group row"> <label for="telefono" class="col-md-2 control-label">Telefono:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="telefono" name="telefono" required maxlength="8"></div>
			   </div>
			   <div class="form-group row"> <label for="direccion" class="col-md-2 control-label">Direccion:</label>
				<div class="col-md-10">
		       <textarea class="form-control" id="direccion" name="direccion" required="" maxlength="250"></textarea></div>
		       
			   </div>
			   <div class="form-group row"> <label for="estado" class="col-md-2 control-label">Estado:</label>
				 <div class="col-md-10">
                   <select class="form-control" id="estado" name="estado" required="">
					<option value="1" selected="">Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				 </div>
         
          </div>
          <div class="form-group row"> <label for="estado" class="col-md-2 control-label">Grupo:</label>
         <div class="col-md-10">
                   <select class="form-control" id="grupo" name="grupo" required="">
                 <?php 
                      while($fila=mysqli_fetch_row($grupo)){
                      echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                      }
                      ?>
                  </select>
         </div>
			   </div>
              
               

                 <div id="mensaje"></div>           
             </div>         
            <div class="modal-footer">
               <button type="button" class="btn btn-success" data-dismiss="modal"><b>Close</b></button>
                <input type="submit" value="Registrar" class="btn btn-success" id="reg"/>
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi"/>
            </div>
            </form>
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
