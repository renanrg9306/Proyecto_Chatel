
<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$numero = $_POST['numero'];
$profesor = $_POST['profesor'];

switch($proceso){
	case 'Registro': mysqli_query($conex,"INSERT INTO numeros_asignaciones (numeroAsignado, IdProfesor) VALUES('$numero','$profesor')");
	break;
	case 'Edicion': mysqli_query($conex,"UPDATE numeros_asignaciones SET numeroAsignado = '$numero', IdProfesor = '$profesor' where idNumeroAsignacion = '$id'");
	break;
   }
    $registro = mysqli_query($conex,"SELECT numeros_asignaciones.idNumeroAsignacion as id, numeros_asignaciones.numeroAsignado as Numero, concat(profesor.NombresProfesor, ' ' ,profesor.ApellidosProfesor) as Profesor 
FROM numeros_asignaciones INNER JOIN profesor ON numeros_asignaciones.IdProfesor=profesor.idProfesor ORDER BY numeros_asignaciones.idNumeroAsignacion ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	          <tr>
                        <th width="40%">Numero de Asignacion</th>  
                        <th width="40%">Profesor Asignado</th>        
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                         <td>'.$registro2['Numero'].'</td>
                          <td>'.$registro2['Profesor'].'</td>
                          <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
                              <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                         </td>
                </tr>';
  }
	
   echo '</table>';
?>