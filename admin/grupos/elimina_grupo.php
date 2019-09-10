<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = $_POST['id'];

mysqli_query($conex, "DELETE FROM grupo WHERE idGrupo = '$id'");

$registro = mysqli_query($conex, "SELECT idGrupo, NumeroGrupo, NombreGrupo, CONCAT(NombresProfesor, ' ', ApellidosProfesor) AS Docente FROM grupo INNER JOIN profesor ON grupo.idProfesor = profesor.idProfesor  ORDER BY idGrupo ASC");

echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	          <tr>
                           <th width="40%">Numero de Grupo</th>
                        <th width="40%">Nombre de Grupo</th> 
                        <th width="40%">Docente</th>                       
                        <th width="20%">Opciones</th>
                   </tr>';
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
echo '</table>';
?>