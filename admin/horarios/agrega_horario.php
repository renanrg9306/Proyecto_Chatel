
<?php
include('../conex.php');

$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$nombre = $_POST['nombre'];

switch($proceso){
	case 'Registro': mysqli_query($conex,"INSERT INTO horarios (NombreHorario) VALUES('$nombre')");
	break;
	case 'Edicion': mysqli_query($conex,"UPDATE horarios SET NombreHorario = '$nombre' where idHorario = '$id'");
	break;
   }
    $registro = mysqli_query($conex,"SELECT * FROM horarios ORDER BY idHorario ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                        <th width="80%">Descripcion de Horario</th>           
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                      <td>'.$registro2['NombreHorario'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['idHorario'].');">
                          <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['idHorario'].');">
                          <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                          </td>
                </tr>';
  }
	
   echo '</table>';
?>