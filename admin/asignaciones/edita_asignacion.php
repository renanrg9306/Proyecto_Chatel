<?php 
include('../conex.php');
$id = $_POST['id'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$valores = mysqli_query($conex,"SELECT * FROM asignaciones WHERE idAsignacion = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['Descripcion'], 
				1 => $valores2['idProfesor'], 
		        2 => $valores2['idAsignatura'], 
		        3 => $valores2['idGrupo'],
		        4 => $valores2['idHorario'],
		        5 => $valores2['Estado'],
		        6 => $valores2['NumeroAsignacion'],
				); 

echo json_encode($datos);
?>