<?php
include('../../admin/conex.php');
session_start();
$codigo = $_SESSION["Codigo"];
$id = $_POST['id'];

mysql_query("DELETE FROM entregatarea WHERE idEntregaTareas = '$id'");

$registro = mysql_query("SELECT entregatarea.idEntregaTareas as id, entregatarea.CodigoTareaProfesor CodigoProfesor, asignaturas.NombreAsignatura as Asignatura, entregatarea.Descripcion as Descripcion,  entregatarea.CodigoEnvioTarea as CodigoTarea, entregatarea.Archivo as Archivo
FROM  entregatarea INNER JOIN asignaturas ON  entregatarea.idAsignatura =  asignaturas.idAsignatura 
                     INNER JOIN estudiantes ON  entregatarea.idEstudiantes =  estudiantes.idEstudiantes
where estudiantes.idEstudiantes = '$codigo' ORDER BY entregatarea.idEntregaTareas ASC");

echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	          <tr>
                       <th width="15%">Codigo Profesor</th> 
                        <th width="15%">Asignatura</th>
                        <th width="20%">Descripcion Tarea</th>
                        <th width="15%">Codigo Tarea Enviada</th> 
                        <th width="20%">Archivo</th>                  
                        <th width="15%">Opciones</th>
                   </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		        echo '<tr>
		                     
                           <td>'.$registro2['CodigoProfesor'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Descripcion'].'</td>
                          <td>'.$registro2['CodigoTarea'].'</td>
                          <td>'.$registro2['Archivo'].'</td>                 
                           <td> <a href="entregatarea/pdf/archivo.php?id='.$registro2['id'].'"> <img src="../images/arch.jpg" width="25" height="25" alt="delete" title="Ver Archivo" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>                                        
                             </td>                                       
                             </td>
			         	</tr>';
	}
echo '</table>';
?>