<?php
include('../conex.php');
$dato = $_POST['dato'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$registro = mysqli_query($conex,"SELECT U.idUsuario,P.idPersona,CONCAT(P.Nombre,' ',P.Apellido) AS Nombres, U.NombreUsuario, U.ContUsuario,CASE WHEN U.idNivel = 1 THEN 'Administrador' WHEN U.idNivel = 2 THEN
'Profesor' ELSE 'Estudiante' END AS idNivel FROM usuarios AS U INNER JOIN persona AS P ON U.idPersona = P.idPersona  WHERE U.NombreUsuario LIKE '%$dato%' ORDER BY idUsuario ASC") or die (mysqli_error($conex));
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                       <th width="20%">Nombre Usuario</th>
                       <th width="20%">Correo Acceso</th>
                         <th width="20%">Contraseña</th>
                         <th width="20%">Rol</th>           
                        <th width="20%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		  echo '<tr>
      			        <td>'.$registro2['Nombres'].'</td>
                                <td>'.$registro2['NombreUsuario'].'</td>
                                <td>'.$registro2['ContUsuario'].'</td>
                                <td>'.$registro2['idNivel'].'</td>
                               
                               <td> <a href="javascript:editarRegistro('.$registro2['idUsuario'].');">
                              <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['idUsuario'].');">
                              <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Desactiva Cuenta" /></a>
                        </td>
		      </tr>';
      	}
      }else{
      	echo '<tr>
      				<td colspan="5">No se encontraron resultados</td>
      			</tr>';
      }
      echo '</table>';
?>
