<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$estado = $_POST['estado'];
//$codigo_Profesor=$filas['idProfesor']; 
$foto = "images/fotos_perfil/perfil.jpg";

switch($proceso){
	case 'Registro': mysqli_query($conex, "INSERT INTO profesor (NombresProfesor, ApellidosProfesor, CedulaProfesor, CorreoProfesor, CelularProfesor, TelefonoProfesor, DireccionProfesor, Estado, Foto) VALUES('$nombre','$apellido','$cedula','$correo','$celular','$telefono','$direccion','$estado','$foto')");

  $consulta=mysqli_query($conex, "SELECT idProfesor from profesor where CedulaProfesor = '$cedula' and CorreoProfesor = '$correo'");              
                           while($filas=mysqli_fetch_array($consulta)){
                                 $codigo_Profesor=$filas['idProfesor'];                           
                 }
     mysqli_query($conex, "INSERT INTO usuarios (NombreUsuario, ContUsuario, idNiveles, Codigo) VALUES('$correo','$cedula','2','$codigo_Profesor')");

	break;
	case 'Edicion': mysqli_query($conex, "UPDATE profesor SET NombresProfesor = '$nombre', ApellidosProfesor = '$apellido', CedulaProfesor = '$cedula', CorreoProfesor = '$correo', CelularProfesor = '$celular', TelefonoProfesor = '$telefono', DireccionProfesor = '$direccion', Estado = '$estado' where idProfesor = '$id'");

    mysqli_query($conex, "UPDATE usuarios SET NombreUsuario = '$correo', PassUsuario = '$cedula' where Codigo = '$id'");
    
	break;
   }
    $registro = mysqli_query($conex, "SELECT * FROM profesor ORDER BY idProfesor ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
                         <th width="10%">Nombres</th>
                         <th width="10%">Apellidos</th>
                         <th width="15%">Cedula</th>
                         <th width="10%">Correo</th>
                         <th width="10%">Celular</th>
                         <th width="10%">Telefono</th>
                         <th width="20%">Direccion</th>
                         <th width="5%">Estado</th>            
                        <th width="10%">Opciones</th>
            </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                          <td>'.$registro2['NombresProfesor'].'</td>
                          <td>'.$registro2['ApellidosProfesor'].'</td>
                          <td>'.$registro2['CedulaProfesor'].'</td>
                           <td>'.$registro2['CorreoProfesor'].'</td>
                          <td>'.$registro2['CelularProfesor'].'</td>
                          <td>'.$registro2['TelefonoProfesor'].'</td>
                          <td>'.$registro2['DireccionProfesor'].'</td>
                          <td>'.$registro2['Estado'].'</td>
                   <td> <a href="javascript:editarRegistro('.$registro2['idProfesor'].');">
                  <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                  <a href="javascript:eliminarRegistro('.$registro2['idProfesor'].');">
                  <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                  </td>
				</tr>';
	}
   echo '</table>';
?>