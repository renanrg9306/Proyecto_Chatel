<?php
include('../../admin/conex.php');
session_start();
$codigo = $_SESSION["Codigo"];
$dato = $_POST['dato'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$registro = mysqli_query($conex,"SELECT evaluaciones.Descripcion as Descripcion, asignaturas.NombreAsignatura as Asignatura, evaluaciones.Unidad as Unidad, 
evaluaciones.Tarea as Tarea,  concat (profesor.NombresProfesor, ' ' ,profesor.ApellidosProfesor) as Profesor, 
evaluaciones.Puntaje as Puntaje,  evaluaciones.FechaEvaluacion as Fecha
FROM evaluaciones INNER JOIN estudiantes ON  evaluaciones.idEstudiantes =  estudiantes.idEstudiantes 
                  INNER JOIN asignaturas ON  evaluaciones.idAsignatura =  asignaturas.idAsignatura 
          INNER JOIN profesor ON  evaluaciones.idProfesor =  profesor.idProfesor
where estudiantes.idEstudiantes = '$codigo' and asignaturas.NombreAsignatura LIKE '%$dato%' ORDER BY evaluaciones.idEvaluaciones ASC");

       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                      <th width="20%">Descripcion</th> 
                        <th width="15%">Asignatura</th>
                        <th width="12%">Unidad</th>
                        <th width="12%">Tarea</th> 
                        <th width="15%">Profesor</th> 
                        <th width="10%">Puntaje</th>  
                        <th width="16%">Fecha Evaluacion</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                          
                          <td>'.$registro2['Descripcion'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Unidad'].'</td>
                          <td>'.$registro2['Tarea'].'</td>
                          <td>'.$registro2['Profesor'].'</td> 
                          <td>'.$registro2['Puntaje'].'</td>
                          <td>'.$registro2['Fecha'].'</td>               
                       </tr>';
      	}
      }else{
      	echo '<tr>
      				<td colspan="7">No se encontraron Calificaciones</td>
      			</tr>';
      }
      echo '</table>';
?>
