<?php 
include('../conex.php');
$dato = $_POST['dato'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$registro = mysqli_query($conex,"SELECT Asi.idAsignacion,CONCAT(P.Nombre,' ',P.Apellido) AS Profesor,Asing.NombreAsignatura,Asi.Descripcion AS TituloAsignacion,Uni.Unidad,Gr.NombreGrupo,Ho.NombreHorario,Asi.Estado FROM asignaciones AS Asi 
INNER JOIN grupo AS Gr ON Gr.idGrupo = Asi.idGrupo 
INNER JOIN persona AS P ON P.idPersona = Gr.idProfesor 
INNER JOIN asignaturas AS Asing ON Gr.idAsignatura = Asing.idAsignatura 
INNER JOIN unidad as Uni ON Asi.idUnidad = Uni.idUnidad 
INNER JOIN horarios AS Ho ON Gr.idHorario = Ho.idHorario 
INNER JOIN unidad AS Un ON Asi.idUnidad = Un.idUnidad WHERE Asi.Descripcion LIKE '%$dato%' ORDER BY asi.idAsignacion ASC");
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                        <th width="10%">Profesor</th>  
                        <th width="15%">Asignatura</th> 
                        <th width="15%">Tíulo de Asignación</th>
                        <th width="7%">Unidad</th>  
                        <th width="7%">Grupo</th>       
                        <th width="15%">Horario</th>
                        <th width="10%">Estado</th>
                        
                        <th width="10%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                          
		            <td>'.$registro2['Profesor'].'</td>
		            <td>'.$registro2['NombreAsignatura'].'</td>
                        <td>'.$registro2['TituloAsignacion'].'</td>
                        <td>'.$registro2['Unidad'].'</td>
                        <td>'.$registro2['NombreGrupo'].'</td>
                        <td>'.$registro2['NombreHorario'].'</td>
                        <td>'.$registro2['Estado'].'</td>
		                       <td> <a href="javascript:editarRegistro('.$registro2['idAsignacion'].');">
		                          <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
		                          <a href="javascript:eliminarRegistro('.$registro2['idAsignacion'].');">
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
