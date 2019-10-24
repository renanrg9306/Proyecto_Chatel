<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = $_POST['id-registro']; 
$proceso = $_POST['pro'];
$nombre = $_POST['CorreoAcceso'];
$pass = $_POST['Contraseña'];
$nivel = $_POST['idNivel'];


switch($proceso){
/* case 'Registro': mysqli_query($conex, "INSERT INTO usuarios (NombreUsuario, ContUsuario, idNiveles, Codigo, Foto) VALUES ('$nombre','$pass','$nivel','$codigo', 'images/fotos_perfil/perfil.jpg')");

	break; */
	case 'Edicion': mysqli_query($conex, "UPDATE usuarios SET idNivel = '$nivel',NombreUsuario='$nombre',ContUsuario='$pass'WHERE idUsuario = '$id'");
    
	break;
   }
    $registro = mysqli_query($conex,"SELECT U.idUsuario,P.idPersona,CONCAT(P.Nombre,' ',P.Apellido) AS Nombres, U.NombreUsuario, U.ContUsuario,CASE WHEN U.idNivel = 1 THEN 'Administrador' WHEN U.idNivel = 2 THEN
    'Profesor' ELSE 'Estudiante' END AS idNivel FROM usuarios AS U INNER JOIN persona AS P ON U.idPersona = P.idPersona ORDER BY U.idUsuario ASC")or die(mysqli_error($conex));

    echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
                      <th width="20%">Nombre de Usuario</th>
                        <th width="20%">Correo de Acceso</th>
                         <th width="20%">Contraseña</th>
                         <th width="20%">Rol</th>           
                        <th width="20%">Opciones</th>
            </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                                <td>'.$registro2['Nombres'].'</td>
                                <td>'.$registro2['NombreUsuario'].'</td>
                                <td>'.$registro2['ContUsuario'].'</td>
                                <td>'.$registro2['idNivel'].'</td>
                               <td> <a href="javascript:editarRegistro('.$registro2['idUsuario'].');">
                              <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['idUsuario'].');">
                              <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                  </td>
				</tr>';
	}
   echo '</table>';
?>