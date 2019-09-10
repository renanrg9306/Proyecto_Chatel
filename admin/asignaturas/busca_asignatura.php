<?php
include('../conex.php');
$dato = $_POST['dato'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$registro = mysqli_query($conex, "SELECT asignaturas.idAsignatura as id, asignaturas.NombreAsignatura as Asignatura                     
  WHERE asignaturas.NombreAsignatura LIKE '%$dato%' ORDER BY asignaturas.idAsignatura ASC");

       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>      
                        <th width="20%">Id</th> 
                      <th width="20%">Asignatura</th>                     
                        <th width="20%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                            <td>'.$registro2['Id'].'</td>
                            <td>'.$registro2['Asignatura'].'</td>
                           <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
                              <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
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
