<?php
include('../conex.php');
$id = $_POST['id'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$valores = mysqli_query($conex, "SELECT * FROM usuarios WHERE idUsuarios = '$id'"); 
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				 
				0 => $valores2['NombreUsuario'], 
			    1 => $valores2['ContUsuario'], 
				2 => $valores2['idNiveles'], 
				3 => $valores2['Codigo'], 
				); 
echo json_encode($datos);
?>