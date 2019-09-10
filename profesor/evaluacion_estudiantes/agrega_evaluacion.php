
<?php

include('../../admin/conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
  session_start();
  $codigo = $_SESSION["Codigo"];

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$descripcion = $_POST['descripcion'];
$estudiante = $_POST['estudiante'];
$asignatura = $_POST['asignatura'];
$unidad = $_POST['unidad'];
$tarea = $_POST['tarea'];
$puntaje = $_POST['puntaje'];
$fechaEvaluacion = date("Y-m-d");

switch($proceso){
	case 'Registro': mysqli_query($conex, "INSERT INTO evaluaciones (Descripcion, idEstudiantes, idAsignatura, Unidad, Tarea, idProfesor, Puntaje, FechaEvaluacion) VALUES('$descripcion', '$estudiante','$asignatura','$unidad','$tarea','$codigo','$puntaje','$fechaEvaluacion')");
	break;
	case 'Edicion': mysqli_query($conex,"UPDATE evaluaciones SET Descripcion = '$descripcion', idEstudiante = '$idEstudiante',idAsignatura = '$asignatura',Unidad = '$unidad',Tarea = '$tarea',Puntaje = '$puntaje',FechaEvaluacion = '$fechaEvaluacion' where idEvaluaciones = '$id'");
	break;
   }
    $registro = mysqli_query($conex, "SELECT evaluaciones.idEvaluaciones as id, evaluaciones.Descripcion as Evaluacion, estudiantes.CarnetEstudiante as carnet, concat (estudiantes.NombresEstudiante,' ', estudiantes.ApellidosEstudiante) as Estudiante,  asignaturas.NombreAsignatura as Asignatura,  
evaluaciones.Unidad as Unidad,  evaluaciones.Tarea as Tarea,  concat (profesor.NombresProfesor,' ',profesor.ApellidosProfesor) as Profesor,  evaluaciones.Puntaje as Puntaje, evaluaciones.FechaEvaluacion as Fecha
FROM profesor INNER JOIN evaluaciones ON  profesor.idProfesor =  evaluaciones.idProfesor 
              INNER JOIN estudiantes ON  evaluaciones.idEstudiantes =  estudiantes.idEstudiantes 
        INNER JOIN grupo ON  estudiantes.idGrupo =  grupo.idGrupo 
        INNER JOIN asignaturas ON  evaluaciones.idAsignatura =  asignaturas.idAsignatura
where  profesor.idProfesor = '$codigo' ORDER BY evaluaciones.idEvaluaciones ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>    
                        <th width="10%">Evaluacion</th> 
                        <th width="10%">Carnet</th>
                        <th width="15%">Estudiante</th>
                        <th width="15%">Asignatura</th> 
                        <th width="10%">Unidad</th> 
                        <th width="10%">Tarea</th>  
                        <th width="10%">Puntaje</th>
                        <th width="10%">Fecha</th>                  
                        <th width="10%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                         <td>'.$registro2['Evaluacion'].'</td>
                          <td>'.$registro2['carnet'].'</td>
                          <td>'.$registro2['Estudiante'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Unidad'].'</td> 
                          <td>'.$registro2['Tarea'].'</td>
                          <td>'.$registro2['Puntaje'].'</td>
                          <td>'.$registro2['Fecha'].'</td>               
                           <td>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>                                        
                             </td>
                </tr>';
  }
	
   echo '</table>';
?>