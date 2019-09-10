<?php 
session_start();
$codigo = $_SESSION["Codigo"];
$conexion = mysqli_connect("localhost", "agat", "1234", "siad");

include ('../../admin/conexion.php');

$id=$_GET['id'];
$observaciones='Esto es una Observacion';
$fecha = date("Y-m-d");
 
$guardar = mysqli_query($conexion,"INSERT INTO inscripciones_asignaturas (idCarrera, idAsignatura, idEstudiante, fechaInscripcion, observaciones) VALUES('$id', '$codigo','$fecha','$observaciones')");
					if ($guardar) {
							  echo '<script> alert("Inscripcion Realizada Correctamente.");</script>';
					       echo '<script> window.location="../inscripcion_asignatura.php"; </script>';
					}
					else
					{
							  echo '<script> alert("Error al Inscribir la asignatura. Intente de Nuevo.");</script>';
					          echo '<script> window.location="../inscripcion_asignatura.php"; </script>';
					}
?>
