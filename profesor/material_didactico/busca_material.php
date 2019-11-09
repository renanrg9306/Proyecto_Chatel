<?php
session_start();
require('../../admin/conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$idPersona = $_SESSION["idPersona"];
$dato = $_POST['dato'];

$registro = mysqli_query($conex, "SELECT MD.idMaterialDidactico,MD.Descripcion,MDOC.Fecha_Subida,ASI.Descripcion AS 'Titulo_Asignacion',Unidad,G.NombreGrupo FROM material_didactico AS MD INNER JOIN material_docente AS MDOC ON MD.idMaterialDidactico = MDOC.idMaterialDidactico INNER JOIN grupo AS G ON MD.idGrupo = G.idGrupo INNER JOIN asignaciones AS ASI ON MDOC.idAsignacion = ASI.idAsignacion INNER JOIN unidad AS UN ON ASI.idUnidad = UN.idUnidad INNER JOIN persona ON persona.idPersona =$idPersona and MD.Descripcion  LIKE '%$dato%' ORDER BY MD.idMaterialDidactico ASC");

       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                        
                        <th width="15%">Titulo Material</th> 
                        <th width="15%">Fecha Publicacion</th>
                        <th width="15%">Asignacion</th>
                        <th width="15%">Unidad</th>
                        <th width="15%">NombreGrupo</th>
                        <th width="20%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                          
                          <td>'.$registro2['Descripcion'].'</td>
                          <td>'.$registro2['Fecha_Subida'].'</td>
                          <td>'.$registro2['Titulo_Asignacion'].'</td>
                          <td>'.$registro2['Unidad'].'</td>
                          <td>'.$registro2['NombreGrupo'].'</td>
                             
                           <td> <a href="material_didactico/pdf/archivo.php?id='.$registro2['idMaterialDidactico'].'"> <img src="../images/arch.jpg" width="25" height="25" alt="delete" title="Ver Archivo" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['idMaterialDidactico'].');">
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
