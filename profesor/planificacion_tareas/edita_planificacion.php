<?php
include('../../admin/conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$id = $_POST['id'];
$valores = mysqli_query($conex,"SELECT * FROM planificacion_tareas WHERE idPlanificacion = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array( 
				0 => $valores2['idNumeroAsignacion'], 
		        1 => $valores2['idAsignatura'], 
		        2 => $valores2['Unidad'], 
		        3 => $valores2['DescripcionUnidad'], 
		        4 => $valores2['Tarea'],
		        5 => $valores2['DescripcionTarea'],
		       // 6 => $valores2['FechaPublicacion'],
		        6 => $valores2['FechaPresentacion'],
		        7 => $valores2['CodigoTarea'],
				); 

echo json_encode($datos);
?>