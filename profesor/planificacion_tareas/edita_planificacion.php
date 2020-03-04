<?php
include('../../admin/conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$id = $_POST['id'];
$valores = mysqli_query($conex,"SELECT Plt.idPlanificacion,Plt.idAsignacion,Plt.Titulo_Tarea, Plt.Descripcion, Uni.Unidad, Plt.Fecha_Publicacion,Plt.Fecha_Entrega FROM planificacion_tareas as Plt INNER JOIN asignaciones AS Asig ON Plt.idAsignacion = Asig.idAsignacion INNER JOIN grupo AS G ON Asig.idGrupo = G.idGrupo INNER JOIN unidad AS Uni ON Asig.idUnidad = Uni.idUnidad WHERE Plt.idPlanificacion = $id");
$valores2 = mysqli_fetch_array($valores);
$datos = array( 
				0 => $valores2['idAsignacion'], 
		        1 => $valores2['Titulo_Tarea'],
		        2 => $valores2['Descripcion'],
		        3 => $valores2['Fecha_Entrega'],

				); 

echo json_encode($datos);
?>