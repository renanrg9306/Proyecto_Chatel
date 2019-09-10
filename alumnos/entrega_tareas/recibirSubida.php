<?php
include_once '../../admin/conex.php';
include_once 'funciones.php';
session_start();
 $codigo = $_SESSION["Codigo"];
$conex = mysqli_connect("localhost", "agat", "1234", "bd");

if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $nombre_sin_acentos = limpiar_acentos($nombre);
    $destino = "pdf/archivos/" . $nombre_sin_acentos;
    $fecha = date("Y-m-d");


        if ($nombre != "") {
         if ($tamanio < 1000 * 1024 ) { //validando que el archivo sea menor a 1 MB
                 if (($tipo == "application/pdf") || ($tipo == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") || ($tipo == "application/msword")) {       //validando que el archivo sea de tipo PDF y WORD (.docx, .doc)          
                   if (copy($ruta, $destino)) {
                                $descripcion= $_POST['descripcion'];
                                $codigoD= $_POST['codigoD'];
                                $asignatura= $_POST['asignatura'];
                                $tarea = mt_rand(99,999999);
                                //$sql = "INSERT INTO entregatarea (CodigoTareaDocente, //idEstudiante,idAsignatura,Descripcion,CodigoEnvioTarea, Archivo,FechaEntrega) //VALUES('$codigoD','$codigo','$asignatura','$descripcion','$tarea','$nombre_sin_acentos','$fecha')";
                    $query = mysqli_query($conex,"INSERT INTO entregatarea (CodigoTareaProfesor, idEstudiantes,idAsignatura,Descripcion,CodigoEnvioTarea, Archivo,FechaEntrega) VALUES('$codigoD','$codigo','$asignatura','$descripcion','$tarea','$nombre_sin_acentos','$fecha')");
                        if($query){
                                echo '<script> alert("La Tarea se ha subido al servidor con Exito.");</script>';
                                echo '<script> alert("El Codigo de su Tarea es : ' .$tarea.'");</script>';
                                echo '<script> window.location="../subirTarea.php"; </script>';
                          }
                } else {
                        echo '<script> alert("Error al subir la Tarea.");</script>';
                }

            }
           else{
                             echo '<script> alert("Solo se permiten archivos PDF.");</script>';
                             echo '<script> window.location="../subirTarea.php"; </script>';
           }  
         }
         else{
                    echo '<script> alert("El Archivo es muy Grande.");</script>';
                    echo '<script> window.location="../subirTarea.php"; </script>';
         }
    }
}

?>