
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
	case 'Registro': mysqli_query($conex, "INSERT INTO estudiantes (CarnetEstudiante, NombresEstudiante, ApellidosEstudiante, CedulaEstudiante, CorreoEstudiante, CelularEstudiante, TelefonoEstudiante, DireccionEstudiante, Estado, idGrupo, Foto) VALUES('$carnet','$nombre','$apellido','$cedula','$correo','$celular','$telefono','$direccion','$estado', '$grupo', '$foto')");

          $consulta=mysqli_query($conex, "SELECT idEstudiantes from estudiantes where CarnetEstudiante = '$carnet' and CorreoEstudiante = '$correo'");              
                           while($filas=mysqli_fetch_array($consulta)){
                                 $codigo_estudiante=$filas['idEstudiantes'];                           
                 }
     mysqli_query($conex, "INSERT INTO usuarios (NombreUsuario, ContUsuario, idNiveles, Codigo) VALUES('$correo','$cedula','3','$codigo_estudiante')");
	
  break;

	case 'Edicion': mysqli_query($conex, "UPDATE estudiantes SET CarnetEstudiante = '$carnet', NombresEstudiante = '$nombre', ApellidosEstudiante = '$apellido', CedulaEstudiante = '$cedula', CorreoEstudiante = '$correo', CelularEstudiante = '$celular', TelefonoEstudiante = '$telefono', DireccionEstudiante = '$direccion', Estado = '$estado' , idGrupo = '$grupo' where idEstudiantes = '$id'");

  mysqli_query($conex, "UPDATE usuarios SET NombreUsuario = '$correo', ContUsuario = '$cedula' where Codigo = '$id'");

	break;
   }
    $registro = mysqli_query($conex, "SELECT * FROM estudiantes ORDER BY idEstudiantes ASC");

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
				         <td>'.$registro2['CarnetEstudiante'].'</td>
                  <td>'.$registro2['NombresEstudiante'].'</td>
                  <td>'.$registro2['ApellidosEstudiante'].'</td>
                  <td>'.$registro2['CedulaEstudiante'].'</td>
                   <td>'.$registro2['CorreoEstudiante'].'</td>
                  <td>'.$registro2['CelularEstudiante'].'</td>
                  <td>'.$registro2['TelefonoEstudiante'].'</td>
                  <td>'.$registro2['DireccionEstudiante'].'</td>
                  <td>'.$registro2['Estado'].'</td>
                   <td>'.$registro2['idGrupo'].'</td>
                   <td> <a href="javascript:editarRegistro('.$registro2['idEstudiantes'].');">
                  <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                  <a href="javascript:eliminarRegistro('.$registro2['idEstudiantes'].');">
                  <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                  </td>
				</tr>';
	}
   echo '</table>';
?>