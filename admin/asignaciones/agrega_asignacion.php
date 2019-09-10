
<?php 
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$nombre = $_POST['nombre'];
$profesor = $_POST['profesor'];
$asignatura = $_POST['asignatura'];
$grupo = $_POST['grupo'];
$horario = $_POST['horario'];
$estado = $_POST['estado'];
$numero = $_POST['numero'];

switch($proceso){
	case 'Registro': mysqli_query($conex,"INSERT INTO asignaciones (Descripcion, idProfesor, idAsignatura, idGrupo, idHorario, Estado, NumeroAsignacion) VALUES('$nombre','$profesor','$asignatura','$grupo','$horario','$estado','$numero')");
	break;
	case 'Edicion': mysqli_query($conex,"UPDATE asignaciones SET Descripcion = '$nombre', idAsignatura = '$asignatura',idGrupo = '$grupo',idHorario = '$horario' ,Estado = '$estado',NumeroAsignacion = '$numero' where idAsignacion = '$id'");
	break;
   }
    $registro = mysqli_query($conex,"SELECT  asignaciones.idAsignacion AS id, asignaciones.Descripcion AS Asignacion,concat(profesor.NombresProfesor,' ',profesor.ApellidosProfesor) as Profesor, 
             asignaturas.NombreAsignatura AS Asignatura, grupo.NumeroGrupo AS Grupo, horarios.NombreHorario AS Horario, asignaciones.Estado AS Estado, asignaciones.NumeroAsignacion AS NumeroA
FROM asignaciones INNER JOIN profesor ON asignaciones.idProfesor = profesor.idProfesor 
                        INNER JOIN asignaturas ON asignaciones.idAsignatura = asignaturas.idAsignatura 
            INNER JOIN grupo ON asignaciones.idGrupo = grupo.idGrupo             
            INNER JOIN horarios ON asignaciones.idHorario = horarios.idHorario ORDER BY asignaciones.idAsignacion ASC");

    echo '<table class="table table-striped table-condensed table-hover">
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
	
   echo '</table>';
?>