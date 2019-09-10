<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = $_POST['id'];

mysqli_query($conex,"DELETE FROM usuarios WHERE idUsuarios = '$id'");

$registro = mysqli_query($conex, "SELECT * FROM usuarios ORDER BY idUsuarios ASC");

echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	          <tr>
                        <th width="20%">Nombre Usuario</th>
                         <th width="20%">Contraseña</th>
                         <th width="20%">Nivel usuario</th>
                         <th width="20%">Codigo</th>            
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		        echo '<tr>
		                           <td>'.$registro2['NombreUsuario'].'</td>
                                <td>'.$registro2['ContUsuario'].'</td>
                                <td>'.$registro2['idNiveles'].'</td>
                                 <td>'.$registro2['Codigo'].'</td>
                               <td> <a href="javascript:editarRegistro('.$registro2['idUsuarios'].');">
                              <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['idUsuarios'].');">
                              <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                        </td>
			         	</tr>';
	}
echo '</table>';
?>