<?php
include('../../admin/conex.php'); 
session_start();
$codigo = $_SESSION["Codigo"];
$dato = $_POST['dato'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$registro = mysqli_query($conex,"SELECT  entregatarea.idEntregaTareas as id, entregatarea.CodigoTareaProfesor as CodigoProfesor, concat(estudiantes.NombresEstudiante,' ',estudiantes.ApellidosEstudiante) as Estudiante, asignaturas.NombreAsignatura as Asignatura,  entregatarea.Descripcion as Descripcion, entregatarea.CodigoEnvioTarea as CodigoEnvio, entregatarea.Archivo as Archivo
FROM  entregatarea INNER JOIN estudiantes ON  entregatarea.idEstudiantes =  estudiantes.idEstudiantes 
                     INNER JOIN asignaturas ON  entregatarea.idAsignatura =  asignaturas.idAsignatura
where entregatarea.CodigoTareaProfesor = '$dato' ORDER BY entregatarea.idEntregaTareas ASC");

       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                        
                         <th width="15%">Codigo Profesor</th> 
                        <th width="15%">Estudiante</th>
                        <th width="15%">Asignatura</th>
                        <th width="15%">Descripcion Tarea</th>
                        <th width="15%">Codigo Estudiante</th> 
                        <th width="15%">Archivo</th>                  
                        <th width="10%">ver</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                          
                          <td>'.$registro2['CodigoProfesor'].'</td>
                          <td>'.$registro2['Estudiante'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Descripcion'].'</td>
                          <td>'.$registro2['CodigoEnvio'].'</td>
                          <td>'.$registro2['Archivo'].'</td>                 
                           <td> <a href="../alumnos/entrega_tareas/pdf/archivo.php?id='.$registro2['id'].'"> <img src="../images/arch.jpg" width="25" height="25" alt="delete" title="Ver Archivo" /></a>                                       
                             </td>
                       </tr>';
      	}
      }else{
      	echo '<tr>
      				<td colspan="6">No existen tareas que mostrar</td>
      			</tr>';
      }
      echo '</table>';
?>
