
<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$Unidad = $_POST['Unidad'];


switch($proceso){
	case 'Registro': mysqli_query($conex,"INSERT INTO unidad (Unidad) VALUES('$Unidad')");
	break;
	case 'Edicion': mysqli_query($conex,"UPDATE Unidad SET Unidad = '$Unidad' where idUnidad = '$id'");
	break;
   }
    $registro = mysqli_query($conex,"SELECT idUnidad, Unidad FROM Unidad  ORDER BY idUnidad ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	          <tr>
                        <th width="40%">Unidad</th>          
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                         <td>'.$registro2['Unidad'].'</td>
                
                          <td> <a href="javascript:editarRegistro('.$registro2['idUnidad'].');">
                              <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['idUnidad'].');">
                             <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                         </td>
                </tr>';
  }
	
   echo '</table>';
?>