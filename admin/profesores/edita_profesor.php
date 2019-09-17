<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$id = $_POST['id'];
$valores = mysqli_query($conex, "SELECT P.Nombre,P.Apellido,P.Cedula,P.Correo,P.Celular,P.Telefono,P.Direccion,P.Estado  FROM persona AS P 
INNER JOIN profesor AS Pro ON P.idPersona = Pro.idPersona WHERE P.idPersona = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				 
				0 => $valores2['Nombre'], 
			    1 => $valores2['Apellido'], 
				2 => $valores2['Cedula'], 
				3 => $valores2['Correo'], 
				4 => $valores2['Celular'], 
			    5 => $valores2['Telefono'], 
				6 => $valores2['Direccion'],
				7 => $valores2['Estado'],
				); 
echo json_encode($datos);
?>