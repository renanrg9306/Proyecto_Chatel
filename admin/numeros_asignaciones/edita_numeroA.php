<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$id = $_POST['id'];
$valores = mysqli_query($conex,"SELECT * FROM unidad AS U WHERE U.idUnidad  = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['Unidad'], 
				); 

echo json_encode($datos);
?>