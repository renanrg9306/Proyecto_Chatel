<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$dato = $_POST['dato'];


$registro = mysqli_query($conex, "SELECT P.idPersona, P.Nombre,P.Apellido,P.Cedula,P.Correo,P.Celular,P.Telefono,P.Direccion,CASE WHEN P.Estado = 1 THEN 'Activo'ELSE 'Inactivo' END AS Estado FROM persona AS P
 INNER JOIN usuarios AS Us ON Us.idPersona = P.idPersona WHERE Us.idNivel = 1 AND P.Nombre LIKE '%$dato%' ORDER BY P.idPersona");
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
      if(mysqli_num_rows($registro)>0){
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
      }else{
      	echo '<tr>
      				<td colspan="10">No se encontraron resultados</td>
      			</tr>';
      }
      echo '</table>';
?>
