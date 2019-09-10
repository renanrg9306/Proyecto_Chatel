<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = $_POST['id'];

mysqli_query($conex, "DELETE FROM asignaturas WHERE idAsignatura = '$id'");

$registro = mysqli_query($conex, "SELECT asignaturas.idAsignatura as id, asignaturas.NombreAsignatura as Asignatura 
  ORDER BY asignaturas.idAsignatura ASC");

echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	          <tr>
                         <th width="20%">idAsignatura</th>  
                        <th width="20%">Asignatura</th>
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		        echo '<tr>
		                  <td>'.$registro2['idAsignatura'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                           <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
                              <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                             </td>
			         	</tr>';
	}
echo '</table>';
?>