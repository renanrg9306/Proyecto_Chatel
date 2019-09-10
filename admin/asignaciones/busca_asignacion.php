<?php 
include('../conex.php');
$dato = $_POST['dato'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$registro = mysqli_query($conex,"SELECT  asignaciones.idAsignacion AS id, asignaciones.Descripcion AS Asignacion,concat(profesor.NombresProfesor,' ',profesor.ApellidosProfesor) as Profesor, 
             asignaturas.NombreAsignatura AS Asignatura, grupo.NumeroGrupo AS Grupo, horarios.NombreHorario AS Horario, asignaciones.Estado AS Estado, asignaciones.NumeroAsignacion AS NumeroA
FROM asignaciones INNER JOIN profesor ON asignaciones.idProfesor = profesor.idProfesor 
                        INNER JOIN asignaturas ON asignaciones.idAsignatura = asignaturas.idAsignatura 
            INNER JOIN grupo ON asignaciones.idGrupo = grupo.idGrupo   
            INNER JOIN horarios ON asignaciones.idHorario = horarios.idHorario
  WHERE asignaciones.Descripcion LIKE '%$dato%' ORDER BY asignaciones.idAsignacion ASC");
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                        <th width="10%">Descripcion</th>  
                        <th width="15%">Profesor</th> 
                        <th width="15%">Asignatura</th>
                        <th width="7%">Grupo</th>       
                        <th width="15%">Horario</th>
                        <th width="10%">Estado</th>
                        <th width="10%">Numero</th>
                        <th width="10%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                          <td>'.$registro2['Asignacion'].'</td>
		                      <td>'.$registro2['Profesor'].'</td>
		                      <td>'.$registro2['Asignatura'].'</td>
		                      <td>'.$registro2['Grupo'].'</td>
                          <td>'.$registro2['Horario'].'</td>
                           <td>'.$registro2['Estado'].'</td>
                          <td>'.$registro2['NumeroA'].'</td>
		                       <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
		                          <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
		                          <a href="javascript:eliminarRegistro('.$registro2['id'].');">
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
