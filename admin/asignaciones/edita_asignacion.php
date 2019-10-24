<?php 
include('../conex.php');
$id = $_POST['id'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$valores = mysqli_query($conex,"SELECT * FROM asignaciones WHERE idAsignacion = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['idGrupo'], 
				1 => $valores2['idUnidad'], 
		        2 => $valores2['Descripcion'], 
		        3 => $valores2['Estado'],
				); 

echo json_encode($datos);
?>