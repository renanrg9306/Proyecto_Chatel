<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = $_POST['id'];

mysqli_query($conex, "DELETE FROM profesor WHERE idProfesor = '$id'");

$registro = mysqli_query($conex, "SELECT * FROM profesor ORDER BY idProfesor ASC");

echo '<table class="table table-striped table-condensed table-hover table-responsive">
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