<?php
include('../../admin/conex.php'); 
session_start();
$idPersona = $_SESSION['idPersona'];
/*
$dato = $_POST['dato']; */
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$registro = mysqli_query($conex,"SELECT Mdoc.idMaterialDidactico,G.NombreGrupo,Asig.Descripcion,Asign.NombreAsignatura,Un.Unidad,Mdoc.Fecha_Subida FROM asignaciones AS Asig INNER JOIN material_docente AS Mdoc ON Asig.idAsignacion = Mdoc.idAsignacion INNER JOIN grupo AS G ON G.idGrupo = Asig.idGrupo INNER JOIN estudiantes AS Est ON Est.idGrupo = G.idGrupo INNER JOIN unidad AS Un ON Un.idUnidad = Asig.idUnidad INNER JOIN asignaturas AS Asign ON Asign.idAsignatura = G.idAsignatura WHERE Est.idPersona = $idPersona");

       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                        
                        <th width="15%">Asignacion</th> 
                        <th width="15%">Asignatura</th> 
                        <th width="15%">Grupo</th> 
                        <th width="15%">Unidad</th> 
                        <th width="15%">Fecha Publucacion</th> 
                        <th width="15%">Archivo</th>  

                        
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                          
                          <td>'.$registro2['Descripcion'].'</td>
                          
                          <td>'.$registro2['NombreAsignatura'].'</td>
                          <td>'.$registro2['NombreGrupo'].'</td>
                          <td>'.$registro2['Unidad'].'</td> 
                          <td>'.$registro2['Fecha_Subida'].'</td>                   
                           <td> <a href="../profesor/material_didactico/pdf/archivo.php?id='.$registro2['idMaterialDidactico'].'"> <img src="../images/arch.jpg" width="25" height="25" alt="delete" title="Ver Archivo" /></a>                                       
                             </td>
                       </tr>';
      	}
      }else{
      	echo '<tr>
      				<td colspan="4">No se ha encontrado el archivo</td>
      			</tr>';
      }
      echo '</table>';
?>
