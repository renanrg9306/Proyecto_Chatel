<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$id = $_POST['id'];
$valores = mysqli_query($conex, "SELECT ES.carnet,P.Nombre,P.Apellido,P.Cedula,P.Correo,P.Celular,P.Telefono,P.Direccion,P.Estado,G.idGrupo FROM persona AS P INNER JOIN estudiantes AS ES ON P.idPersona = ES.idPersona INNER JOIN grupo as G ON ES.idGrupo = G.idGrupo WHERE P.idPersona = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array( 
				0 => $valores2['carnet'], 
				1 => $valores2['Nombre'], 
			    2 => $valores2['Apellido'], 
				3 => $valores2['Cedula'], 
				4 => $valores2['Correo'], 
				5 => $valores2['Celular'], 
			    6 => $valores2['Telefono'], 
				7 => $valores2['Direccion'],
				8 => $valores2['Estado'],
				9 => $valores2['idGrupo'],
				); 
echo json_encode($datos);
?>