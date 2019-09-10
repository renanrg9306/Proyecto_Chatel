<?php
include('../conex.php');
	$paginaActual = $_POST['partida'];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

    $numeroRegistros = mysqli_num_rows(mysqli_query($conex,"SELECT * FROM numeros_asignaciones"));
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
  	$registro = mysqli_query($conex,"SELECT numeros_asignaciones.idNumeroAsignacion as id, numeros_asignaciones.numeroAsignado as Numero, concat(profesor.NombresProfesor, ' ' ,profesor.ApellidosProfesor) as Profesor 
FROM numeros_asignaciones INNER JOIN profesor ON numeros_asignaciones.IdProfesor=profesor.idProfesor LIMIT $limit, $nroLotes ");
    
  	$tabla = $tabla.'<table class="table table-striped table-condensed table-hover table-responsive">
			                <tr>
                         <th width="40%">Numero de Asignacion</th>  
                        <th width="40%">Profesor Asignado</th>        
                        <th width="20%">Opciones</th>
                   </tr>';		
          	while($registro2 = mysqli_fetch_array($registro)){
      $tabla = $tabla.'<tr>
                       <td>'.$registro2['Numero'].'</td>
                          <td>'.$registro2['Profesor'].'</td>
                           <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
                              <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                             </td>
                </tr>';	
	}
        
    $tabla = $tabla.'</table>';
    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);
?>