
<?php
include('../conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];

$idProfesor = $_POST['idProfesor'];
$idAsignatura = $_POST['idAsignatura'];
$idHorario = $_POST['idHorario'];
$nombregrupo = $_POST['NombreGrupo'];


switch($proceso){
	case 'Registro': mysqli_query($conex, "INSERT INTO grupo (idProfesor,idAsignatura,idHorario,NombreGrupo) VALUES('$idProfesor','$idAsignatura','$idHorario','$nombregrupo')");
	break;
	case 'Edicion': mysqli_query($conex, "UPDATE grupo SET  idAsignatura = '$idAsignatura', idHorario ='$idHorario', NombreGrupo = '$nombregrupo', idProfesor = '$idProfesor' where idGrupo = '$id'");
	break;
   }
    $registro = mysqli_query($conex, "SELECT G.idGrupo,Asi.NombreAsignatura, G.NombreGrupo,H.NombreHorario, CONCAT(P.Nombre,' ',P.Apellido) AS Docente FROM grupo AS G INNER JOIN asignaturas AS Asi ON Asi.idAsignatura = G.idAsignatura INNER JOIN persona AS P ON G.idProfesor = P.idPersona
    INNER JOIN horarios AS H ON G.idHorario = H.idHorario ORDER BY idGrupo ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                        <th width="40%">Nombre de Grupo</th>
                        <th width="40%">Asignatura</th>
                        <th width="40%">Docente</th>   
                        <th width="40%">Horario</th>         
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                        <td>'.$registro2['NombreGrupo'].'</td>
                        <td>'.$registro2['NombreAsignatura'].'</td>
                      <td>'.$registro2['Docente'].'</td>
                      <td>'.$registro2['NombreHorario'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['idGrupo'].');">
                          <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['idGrupo'].');">
                          <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                          </td>
                </tr>';
  }
	
   echo '</table>';
?>