<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$dato = $_POST['dato'];

$registro = mysqli_query($conex, "SELECT idGrupo, NombreGrupo, NumeroGrupo, CONCAT(NombresProfesor, ' ', ApellidosProfesor) AS Docente FROM grupo INNER JOIN profesor ON grupo.idProfesor = profesor.idprofesor WHERE NombreGrupo LIKE '%$dato%' ORDER BY idGrupo ASC");
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                          <th width="40%">Numero de Grupo</th>
                        <th width="40%">Nombre de Grupo</th>
                        <th width="40%">Docente</th>
                        <th width="20%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                             <td>'.$registro2['NumeroGrupo'].'</td>
                      <td>'.$registro2['NombreGrupo'].'</td>
                      <td>'.$registro2['Docente'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['idGrupo'].');">
                          <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['idGrupo'].');">
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