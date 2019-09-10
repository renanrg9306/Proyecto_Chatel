<?php
include('../../admin/conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$id = $_POST['id'];
$valores = mysqli_query($conex,"SELECT * FROM evaluaciones WHERE idEvaluaciones = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array( 
				0 => $valores2['Descripcion'], 
		        1 => $valores2['idEstudiantes'], 
		        2 => $valores2['idAsignatura'], 
		        3 => $valores2['Unidad'], 
		        4 => $valores2['Tarea'],
		        5 => $valores2['Puntaje'],
		        6 => $valores2['FechaEvaluacion'],
				); 

echo json_encode($datos);
?>