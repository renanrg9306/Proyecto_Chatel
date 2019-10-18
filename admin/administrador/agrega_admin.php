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
$foto = "images/fotos_perfil/perfil.jpg";

switch($proceso){
   case 'Registro':
      if(mysqli_query($conex, "INSERT INTO persona (Nombre, Apellido, Cedula, Correo, Celular, Telefono, Direccion, Estado)
         VALUES('$nombre','$apellido','$cedula','$correo','$celular','$telefono','$direccion','$estado')"))
         {
            $idpersona = mysqli_insert_id($conex);
            $ContUsuario = strrev($nombre);
            mysqli_query($conex,"INSERT INTO usuarios (idPersona,idNivel,NombreUsuario,ContUsuario,Foto) VALUES('$idpersona',1,'$correo','$ContUsuario','$foto')");
         }
        else 
        {
           echo "Fallado";
        }
   
   break;
   
   case 'Edicion':

      if(mysqli_query($conex, "UPDATE persona SET 
         Nombre = '$nombre', Apellido = '$apellido', Cedula = '$cedula', Correo = '$correo', Celular = '$celular',
         Telefono = '$telefono', Direccion = '$direccion', Estado = '$estado' where idPersona = '$id' "))      {
               echo "Registro Exitoso"; 
         }
      else
      {
         echo "fallado";
      }
	break;
   }
    $registro = mysqli_query($conex, "SELECT P.idPersona, P.Nombre,P.Apellido,P.Cedula,P.Celular,P.Correo,P.Telefono,P.Direccion,P.Estado FROM persona AS P
                              INNER JOIN usuarios AS Us ON P.idPersona = Us.idPersona WHERE Us.idNivel = 1 ORDER BY P.idPersona ASC");

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
                          <td>'.$registro2['Nombre'].'</td>
                          <td>'.$registro2['Apellido'].'</td>
                          <td>'.$registro2['Cedula'].'</td>
                           <td>'.$registro2['Correo'].'</td>
                          <td>'.$registro2['Celular'].'</td>
                          <td>'.$registro2['Telefono'].'</td>
                          <td>'.$registro2['Direccion'].'</td>
                          <td>'.$registro2['Estado'].'</td>
                   <td> <a href="javascript:editarRegistro('.$registro2['idPersona'].');">
                  <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                  <a href="javascript:eliminarRegistro('.$registro2['idPersona'].');">
                  <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                  </td>
				</tr>';
	}
   echo '</table>';
?>