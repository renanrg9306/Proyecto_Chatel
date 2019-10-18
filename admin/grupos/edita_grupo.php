<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$id = $_POST['id'];
$valores = mysqli_query($conex, "SELECT * FROM grupo WHERE idGrupo = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['idProfesor'], 
				1 => $valores2['idAsignatura'],
				2 => $valores2['idHorario'],
				3 => $valores2['NombreGrupo'],
				); 
echo json_encode($datos);
?>