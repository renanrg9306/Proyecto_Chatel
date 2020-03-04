
<?php

include('../../admin/conex.php');
$conex = mysqli_connect("localhost", "agat", "1234", "bd");
  session_start();
   $id = $_POST['id-registro'];
   $proceso = $_POST['pro'];
   $idPersona = $_SESSION['idPersona'];
   $idAsignacion = $_POST["idAsignacion"];
         $tarea = $_POST["tarea"];
         $descripcionT = $_POST["descripcionT"];
         $Fecha_Entrega = $_POST["fecha"];
         $ArrayFecha = getdate();
         $FechaPu = $ArrayFecha['year'].'/'.$ArrayFecha['mon'].'/'.$ArrayFecha['mday'];
         $tarjetfile = "";

/* $directorio = "pdf/"; */
/* $directorio_doc = $directorio.basename($_FILES["fileToUpload"]["name"]);
$Check = filesize($_FILES["fileToUpload"]["tmp_name"]); */
/* $uploadOK = 1;
$TipoArchivo = strtolower(pathinfo($directorio_doc,PATHINFO_EXTENSION));
if(isset($_POST['submit'])){
  
    if($Check!=0 && ($TipoArchivo =="pdf" || $TipoArchivo =="doc" || $TipoArchivo=="docx")){
        $uploadOK = 1; */
        
         switch($proceso){
            case 'Registro': mysqli_query($conex, "INSERT INTO planificacion_tareas (idAsignacion,Titulo_Tarea,Descripcion,Archivo,Fecha_Publicacion,Fecha_Entrega) VALUES('$idAsignacion','$tarea','$descripcionT','$tarjetfile','$FechaPu','$Fecha_Entrega')");
            break;
            case 'Edicion': mysqli_query($conex, "UPDATE planificacion_tareas SET idAsignacion = '$idAsignacion', Titulo_Tarea = '$tarea', Archivo = '$tarjetfile',Fecha_Entrega = '$Fecha_Entrega' where idPlanificacion = '$id'");
            break;
        
         }
   /*  }
    else {
        $uploadOK = 0;
        echo "NO se subio";
    } */
/* } */


  /*  $directorio = "pdf/";
   
   $tarjetfile = $directorio.$_FILES["documento"]["name"];
   $TipoArchivo = strtolower(pathinfo($tarjetfile,PATHINFO_EXTENSION));
   
   if(isset($tarjetfile)){
     
      if($TipoArchivo == 'pdf' or $TipoArchivo =='doc' or $TipoArchivo == 'docx'){
         $idAsignacion = $_POST["idAsignacion"];
         $tarea = $_POST["tarea"];
         $descripcionT = $_POST["descripcionT"];
         $Fecha_Entrega = $_POST["fecha"];
         $FechaPu = getdate("d,m,y"); */
         
         
    
         
       
/* 
    $registro = mysqli_query($conex,"SELECT planificacion_tareas.idPlanificacion as id, numeros_asignaciones.numeroAsignado as Numero, asignaturas.NombreAsignatura as Asignatura, planificacion_tareas.Unidad as Unidad, planificacion_tareas.DescripcionUnidad as UnidadD,  planificacion_tareas.Tarea as Tarea, planificacion_tareas.DescripcionTarea as TareaD, planificacion_tareas.FechaPublicacion as FechaPu, planificacion_tareas.FechaPresentacion as FechaPre,planificacion_tareas.CodigoTarea as Codigo 
from planificacion_tareas inner join numeros_asignaciones on planificacion_tareas.idNumeroAsignacion=numeros_asignaciones.idNumeroAsignacion 
                          inner join asignaturas on planificacion_tareas.idAsignatura = asignaturas.idAsignatura 
where planificacion_tareas.idProfesor = '$codigo' ORDER BY planificacion_tareas.idPlanificacion ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                         <th width="10%">Numero Asignado</th>  
                        <th width="15%">Asignatura</th> 
                        <th width="15%">Unidad</th>
                        <th width="7%">Desc. Unidad</th>
                        <th width="8%">Tarea</th>        
                        <th width="15%">Desc. Tarea</th>
                        <th width="10%">Fecha Publicacion</th>
                        <th width="10%">Fecha Presentacion</th>
                        <th width="10%">Codigo</th>
                         <th width="10%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                           <td>'.$registro2['Numero'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Unidad'].'</td>
                          <td>'.$registro2['UnidadD'].'</td>
                          <td>'.$registro2['Tarea'].'</td>
                          <td>'.$registro2['TareaD'].'</td>
                          <td>'.$registro2['FechaPu'].'</td>
                           <td>'.$registro2['FechaPre'].'</td>
                          <td>'.$registro2['Codigo'].'</td>
                           <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
                              <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                             </td>
                </tr>';
  }
	
   echo '</table>'; */
?>