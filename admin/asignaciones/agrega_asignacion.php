
<?php 
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$idgrupo = $_POST['grupo'];
$idunidad = $_POST['idUnidad'];
$idAdmin = $_POST['idPersona'];
$descripcion = $_POST['nombre'];
$estado = $_POST['estado'];

switch($proceso){
	case 'Registro': mysqli_query($conex,"INSERT INTO asignaciones (idAdmin,idGrupo,idUnidad,Descripcion,Estado) VALUES('$idAdmin','$idgrupo','$idunidad','$descripcion','$estado')");
	break;
	case 'Edicion': mysqli_query($conex,"UPDATE asignaciones SET Descripcion = '$nombre', idGrupo = '$grupo', idUnidad = '$unidad', Estado = '$estado', where idAsignacion = '$id'");
	break;
   }
    $registro = mysqli_query($conex,"SELECT CONCAT(P.Nombre,' ',P.Apellido) AS Profesor,Asing.NombreAsignatura,Asi.Descripcion AS TituloAsignacion,Uni.Unidad,Gr.NombreGrupo,Ho.NombreHorario,Asi.Estado FROM asignaciones AS Asi INNER JOIN grupo AS Gr ON Gr.idGrupo = Asi.idGrupo 
    INNER JOIN persona AS P ON P.idPersona = Gr.idProfesor
    INNER JOIN asignaturas AS Asing ON Gr.idAsignatura = Asing.idAsignatura 
    INNER JOIN unidad as Uni ON Asi.idUnidad = Uni.idUnidad 
    INNER JOIN horarios AS Ho ON Gr.idHorario = Ho.idHorario 
    INNER JOIN unidad AS Un ON Asi.idUnidad = Un.idUnidad ORDER BY asi.idAsignacion ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                          <th width="10%">Descripcion</th>  
                        <th width="15%">Profesor</th> 
                        <th width="15%">Asignatura</th>
                        <th width="7%">Grupo</th>       
                        <th width="15%">Horario</th>
                        <th width="10%">Estado</th>
                        <th width="10%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                        <td>'.$registro2['Asignacion'].'</td>
                          <td>'.$registro2['Profesor'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Grupo'].'</td>
                          <td>'.$registro2['Horario'].'</td>
                           <td>'.$registro2['Estado'].'</td>
                          <td>'.$registro2['NumeroA'].'</td>
                           <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
                              <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                             </td>
                </tr>';
  }
	
   echo '</table>';
?>