<?php
include('../../admin/conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

session_start();
$idPersona = $_SESSION["idPersona"];

$dato = $_POST['dato'];

$registro = mysqli_query($conex, "SELECT Plt.idPlanificacion,Plt.Titulo_Tarea, Asig.Descripcion, Uni.Unidad, Plt.Fecha_Publicacion,Plt.Fecha_Entrega FROM planificacion_tareas as Plt INNER JOIN asignaciones AS Asig ON Plt.idAsignacion = Asig.idAsignacion INNER JOIN grupo AS G ON Asig.idGrupo = G.idGrupo INNER JOIN unidad AS Uni ON Asig.idUnidad = Uni.idUnidad WHERE G.idProfesor = $idPersona"); 
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                        <th width="10%">Titulo Tarea</th>  
                        <th width="15%">Descripcion</th> 
                        <th width="15%">Unidad</th>
                        <th width="10%">Fecha Publicacion</th>
                        <th width="10%">Fecha Presentacion</th>
                         <th width="10%">Opciones</th>

            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                    
		                      <td>'.$registro2['Titulo_Tarea'].'</td>
		                      <td>'.$registro2['Descripcion'].'</td>
		                      <td>'.$registro2['Unidad'].'</td>
		                      <td>'.$registro2['Fecha_Publicacion'].'</td>
                          <td>'.$registro2['Fecha_Entrega'].'</td>
                          
		                       <td> <a href="javascript:editarRegistro('.$registro2['idPlanificacion'].');">
		                          <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
		                          <a href="javascript:eliminarRegistro('.$registro2['idPlanificacion'].');">
                             <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                             </td>
                       </tr>';
      	}
      }else{
      	echo '<tr>
      				<td colspan="10">No se encontraron resultados</td>
      			</tr>';
      }
      echo '</table>';
?>
