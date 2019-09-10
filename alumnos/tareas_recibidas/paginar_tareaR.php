<?php
include('../../admin/conex.php');
session_start();
$codigo = $_SESSION["Codigo"];
	$paginaActual = $_POST['partida'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

    $numeroRegistros = mysqli_num_rows(mysqli_query($conex ,"SELECT * FROM asignaciones"));
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
  	$registro = mysqli_query($conex ,"SELECT planificacion_tareas.idPlanificacion as id, concat (profesor.NombresProfesor,' ' ,profesor.ApellidosProfesor) as Profesor, asignaturas.NombreAsignatura as Asignatura, 
      planificacion_tareas.Unidad as Unidad, planificacion_tareas.Tarea as Tarea, planificacion_tareas.DescripcionTarea as TareaD, planificacion_tareas.FechaPublicacion as FechaPublicacion, planificacion_tareas.FechaPresentacion as FechaPresentacion, planificacion_tareas.CodigoTarea as CodigoTarea
FROM planificacion_tareas INNER JOIN profesor ON  planificacion_tareas.idProfesor =  profesor.idProfesor
INNER JOIN asignaturas ON  planificacion_tareas.idAsignatura =  asignaturas.idAsignatura
where planificacion_tareas.CodigoTarea = '$dato' LIMIT $limit, $nroLotes ");
  	$tabla = $tabla.'<table class="table table-striped table-condensed table-hover table-responsive">
			                <tr>
                     <th width="20%">Profesor</th> 
                     <th width="10%">Asignatura</th>
                      <th width="10%">Unidad</th>
                        <th width="10%">Tarea</th>
                        <th width="30%">Descripcion de Tarea</th>  
                        <th width="10%">Fecha Publicacion</th>  
                        <th width="10%">Fecha Presentacion</th> 
                   </tr>';		
          	while($registro2 = mysqli_fetch_array($registro)){
      $tabla = $tabla.'<tr>
                         
                             <td>'.$registro2['Profesor'].'</td>
                             <td>'.$registro2['Asignatura'].'</td>
                             <td>'.$registro2['Unidad'].'</td> 
                          <td>'.$registro2['Tarea'].'</td> 
                           <td>'.$registro2['TareaD'].'</td>  
                          <td>'.$registro2['FechaPresentacion'].'</td> 
                          <td>'.$registro2['FechaPublicacion'].'</td> 
                </tr>';	
	}
        
    $tabla = $tabla.'</table>';
    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);
?>