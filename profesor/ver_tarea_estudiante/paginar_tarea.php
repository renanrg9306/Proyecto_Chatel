<?php
include('../../admin/conex.php');
session_start();
$codigo = $_SESSION["Codigo"];
	$paginaActual = $_POST['partida'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

    $numeroRegistros = mysqli_num_rows(mysqli_query($conex,"SELECT * FROM asignaciones"));
    $nroLotes = 10;
    $nroPaginas = ceil($numeroRegistros/$nroLotes);
    $lista = '';
    $tabla = '';

    if($paginaActual > 1){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual-1).');">Anterior</a></li>';
    }
    for($i=1; $i<=$nroPaginas; $i++){
        if($i == $paginaActual){
            $lista = $lista.'<li class="active"><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }else{
            $lista = $lista.'<li><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }
    }
    if($paginaActual < $nroPaginas){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual+1).');">Siguiente</a></li>';

    }
  
  	if($paginaActual <= 1){
  		$limit = 0;
  	}else{
  		$limit = $nroLotes*($paginaActual-1);
  	}
  	$registro = mysqli_query($conex, "SELECT entregatarea.idEntregaTareas as id, entregatarea.CodigoTareaProfesor CodigoProfesor, asignaturas.NombreAsignatura as Asignatura, entregatarea.Descripcion as Descripcion,  entregatarea.CodigoEnvioTarea as CodigoTarea, entregatarea.Archivo as Archivo
FROM  entregatarea INNER JOIN asignaturas ON  entregatarea.idAsignatura =  asignaturas.idAsignatura 
                     INNER JOIN estudiantes ON  entregatarea.idEstudiantes =  estudiantes.idEstudiantes
where entregatarea.CodigoTareaProfesor = '$dato' LIMIT $limit, $nroLotes ");
  	$tabla = $tabla.'<table class="table table-striped table-condensed table-hover table-responsive">
			                <tr>
                        
                       <th width="15%">Codigo Profesor</th> 
                        <th width="15%">Asignatura</th>
                        <th width="20%">Descripcion Tarea</th>
                        <th width="15%">Codigo Tarea Enviada</th> 
                        <th width="20%">Archivo</th>                  
                        <th width="15%">Opciones</th>
                   </tr>';		
          	while($registro2 = mysqli_fetch_array($registro)){
      $tabla = $tabla.'<tr>
                         
                           <td>'.$registro2['CodigoProfesor'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Descripcion'].'</td>
                          <td>'.$registro2['CodigoTarea'].'</td>
                          <td>'.$registro2['Archivo'].'</td>                 
                           <td> <a href="../alumnos/entrega_tareas/pdf/archivo.php?id='.$registro2['id'].'"> <img src="../docentes/images/verArchivo.png" width="25" height="25" alt="delete" title="Ver Archivo" /></a>                                       
                             </td>
                </tr>';	
	}
        
    $tabla = $tabla.'</table>';
    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);
?>