
<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = isset($_POST['id-registro']) ? $_POST['id-registro']:'' ;
$proceso = isset($_POST['pro']) ? $_POST['pro']:'';
$carnet = isset($_POST['carnet']) ? $_POST['carnet']:'';
$nombre = isset($_POST['nombre']) ? $_POST['nombre']:'';
$apellido = isset($_POST['apellido']) ? $_POST['apellido']:'';
$cedula = isset($_POST['cedula']) ? $_POST['cedula']:'';
$correo = isset($_POST['correo']) ? $_POST['correo']:'';
$celular = isset($_POST['celular']) ? $_POST['celular']:'';
$telefono = isset($_POST['telefono']) ? $_POST['telefono']:'';
$direccion = isset($_POST['direccion']) ? $_POST['direccion']:'';
$estado = isset($_POST['estado']) ? $_POST['estado']:'';
$grupo = isset($_POST['grupo']) ? $_POST['grupo']:'';
$foto = "images/fotos_perfil/perfil.jpg";



//$T3 = isset($_POST['T3']) ? $_POST['T3'] : NULL;

switch($proceso){
  case 'Registro': 
    if(mysqli_query($conex, "INSERT INTO persona (Nombre, Apellido, Cedula, Correo, Celular, Telefono, Direccion, Estado)
    VALUES('$nombre','$apellido','$cedula','$correo','$celular','$telefono','$direccion','$estado')"))
   {
        $idpersona = mysqli_insert_id($conex);
        mysqli_query($conex, "INSERT INTO estudiantes (idPersona,idGrupo,carnet) VALUES('$idpersona','$grupo','$carnet')");
   }
   else {
     ECHO "FALLADO";
   }
   
  break;

  case 'Edicion': 
  if(mysqli_query($conex, "UPDATE persona SET 
  Nombre = '$nombre', Apellido = '$apellido', Cedula = '$cedula', Correo = '$correo', Celular = '$celular', Telefono = '$telefono', Direccion = '$direccion', Estado = '$estado' where idPersona = '$id' ")
  ){
    
    mysqli_query($conex, "UPDATE estudiantes SET idgrupo = '$grupo', carnet = '$carnet' where idPersona = '$id'");
  }
  else {
    echo "fallado";
  }
  
  

	break;
   }
    $registro = mysqli_query($conex, "SELECT ES.idEstudiantes,P.idPersona,ES.carnet,P.Nombre,P.Apellido,P.Cedula,P.Correo,P.Celular,P.Telefono,P.Direccion,P.Estado,G.idGrupo FROM persona AS P INNER JOIN estudiantes AS ES ON P.idPersona = ES.idPersona INNER JOIN grupo as G ON ES.idGrupo = G.idGrupo
    ORDER BY ES.idEstudiantes ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
                        <th width="10%">Carnet</th>
                         <th width="10%">Nombres</th>
                         <th width="10%">Apellidos</th>
                         <th width="10%">Cedula</th>
                         <th width="10%">Correo</th>
                         <th width="10%">Celular</th>
                         <th width="10%">Telefono</th>
                         <th width="10%">Direccion</th>
                         <th width="5%">Estado</th> 
                          <th width="5%">Grupo</th>             
                        <th width="10%">Opciones</th>
            </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
				         <td>'.$registro2['carnet'].'</td>
                  <td>'.$registro2['Nombre'].'</td>
                  <td>'.$registro2['Apellido'].'</td>
                  <td>'.$registro2['Cedula'].'</td>
                   <td>'.$registro2['Correo'].'</td>
                  <td>'.$registro2['Celular'].'</td>
                  <td>'.$registro2['Telefono'].'</td>
                  <td>'.$registro2['Direccion'].'</td>
                  <td>'.$registro2['Estado'].'</td>
                   <td>'.$registro2['idGrupo'].'</td>
                   <td> <a href="javascript:editarRegistro('.$registro2['idPersona'].');">
                  <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                  <a href="javascript:eliminarRegistro('.$registro2['idPersona'].');">
                  <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                  </td>
				</tr>';
	}
   echo '</table>';
?>